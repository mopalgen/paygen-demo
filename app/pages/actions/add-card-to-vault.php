<?php
$customer = new Mopalgen\Paygen\Customer();

// Require 3DS data
if (!isset($_POST['three_ds_data'])) {
    die('3D Secure authentication is required');
}

$three_ds_data = $_POST['three_ds_data'];

$response = $customer->addCardToCustomerVault(
    SECURITY_KEY, 
    $_POST['payment_token'],
    $three_ds_data
);
var_dump($response);
