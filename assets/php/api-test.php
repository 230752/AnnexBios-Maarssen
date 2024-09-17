<?php
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://annexbios-server.onrender.com/api/movies",);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

$returnedData = json_decode($response, true);

foreach ($returnedData as $movie) {
    echo $movie['title'];
    echo $movie['rating'];
}

curl_close($curl);
?>