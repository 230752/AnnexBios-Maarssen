<?php
include_once '../database/db_connect.php';

// Core
$content = trim(file_get_contents("php://input"));
$decoded = json_decode($content, true);

// POST values
if (
    !isset($decoded["movieId"])
    || !isset($decoded["purchaseDate"])
    || !isset($decoded["purchaseTimeStamp"])
) {
    echo json_encode(array(
        "error" => "One or more args are missing"
    ));

    exit();
}

$moveId = $decoded["movieId"]; 
$purchaseDate = $decoded["purchaseDate"]; 
$purchaseTimeStamp = $decoded["purchaseTimeStamp"]; 

// Get seats
$seatsSql = "SELECT `purchase_seats` FROM `purchases` WHERE purchases.purchase_date = '{$purchaseDate}' AND purchases.purchase_timestamp = '{$purchaseTimeStamp}';";
$seats = [];

$stmt = $conn->prepare($seatsSql);
$stmt->execute();
$stmt->bind_result($seatsSql);

while ($stmt->fetch()) {
    $seats[] = stripslashes($seatsSql);
}

$stmt->close();

// Return data
echo json_encode(array(
    "seats" => $seats,
));
?>