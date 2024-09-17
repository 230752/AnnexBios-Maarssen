<?php
// Core
$content = trim(file_get_contents("php://input"));
$decoded = json_decode($content, true);

// POST values
$couponCode = $decoded["couponCode"]; 

// Check values
$IS_COUPON_VALID = $couponCode == "FREEMONEY";
$PROCENT_OFF = 20;

// PUT DATABASE CHECKING HERE \\



// --------------------------- \\


// Coupon check
if ($IS_COUPON_VALID) {
    echo json_encode(array(
        "procent" => $PROCENT_OFFs,
        "valid" => true
    ));

    return;
}

echo json_encode(array(
    "valid" => false
));
?>