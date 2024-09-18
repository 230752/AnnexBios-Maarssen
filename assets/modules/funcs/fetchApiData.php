<?php
include_once 'database/db_connect.php';

$stripInjections = require_once('assets/modules/funcs/stripInjections.php');

$apiUrl = "https://annexbios-server.onrender.com/api/";
$MAX_ELAPSED_TIME = 20; // Seconds

$whitelist = array("movies" => true);

function connectServerApi($apiName) {
    global $apiUrl;

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $apiUrl . $apiName);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);

    curl_close($curl);  

    return $response;
}

return function ($apiName) {
    // Check if api name is in the whitelist
    global $whitelist;
    if (!$whitelist[$apiName]) return;

    global $MAX_ELAPSED_TIME;
    global $conn;

    // Check if it's time to update
    $findSql = "
        SELECT `name`, `last_updated`, `json`
        FROM `api`
        WHERE api.name='movies';
    ";

    $stmt = $conn->prepare($findSql);

    $stmt->execute();
    $stmt->bind_result($name, $last_updated, $json);

    $stmt->fetch();
    $stmt->close();

    $currentTime = time();
    $elapsed = isset($last_updated)
        ? time() - $last_updated
        : 0;

    // Check if sql exists, if not creates one
    if ($name == null) {
        // Get data from api
        $rawResponse = connectServerApi($apiName);

        // Make sql data from the api data
        $createSql = "
            INSERT INTO `api` (`name`, `last_updated`, `json`)
            VALUES ('{$apiName}', '{$currentTime}', '{$rawResponse}')
        ";
        
        $stmt = $conn->prepare($createSql);
        $stmt->execute();
        $stmt->fetch();
        $stmt->close();

        // echo "Created";

        return $rawResponse;
    }

    // Timeout, gives sql data instead of api data
    if ($elapsed < $MAX_ELAPSED_TIME) {
        // echo "timeout";

        return $json;
    }


    // Updating sql with api data
    $rawResponse = connectServerApi($apiName);

    $updateSql = "
    UPDATE `api`
    SET
        `last_updated` = '{$currentTime}',
        `json` = '{$rawResponse}'
    WHERE `api`.`name` = '{$name}';
    ";
 
    $stmt = $conn->prepare($updateSql);
    $stmt->execute();
    $stmt->fetch();
    $stmt->close();

    // echo "update";
    
    return $rawResponse;
}
?>