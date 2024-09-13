<?php
$body = trim(file_get_contents("php://input"));

if (!isset($body["couponCode"])) {
    echo json_encode(array(
        "valid" => false
    ));
}

echo json_encode(array(
    "valid" => true
));
?>