<?php
$customer = new Mopalgen\Paygen\Customer();
$customer->setBillingAddress(
    $_POST['firstname'],
    $_POST['lastname'],
    $_POST['address1'],
    $_POST['address2'],
    $_POST['city'],
    $_POST['state'],
    $_POST['country'],
    $_POST['zip']
);
$customer->setShippingAddress(
    $_POST['shipping_firstname'],
    $_POST['shipping_lastname'],
    $_POST['shipping_address1'],
    $_POST['shipping_address2'],
    $_POST['shipping_city'],
    $_POST['shipping_state'],
    $_POST['shipping_country'],
    $_POST['shipping_zip']
);
$customer->setIPAddress($_SERVER['REMOTE_ADDR']);

// Require 3DS data
if (!isset($_POST['three_ds_data'])) {
    die('3D Secure authentication is required');
}

$three_ds_data = $_POST['three_ds_data'];

$paymentProcessor = new Mopalgen\Paygen\Init(SECURITY_KEY, $customer);

if(ENABLE_KOUNT_FRAUD_DETECTION) {
    $response = $paymentProcessor->createOrder(
        $order_details, 
        $_POST['payment_method'], 
        $_POST['payment_token'], 
        $_POST['transaction_session_id'],
        $three_ds_data
    );
} else {
    $response = $paymentProcessor->createOrder(
        $order_details, 
        $_POST['payment_method'], 
        $_POST['payment_token'],
        "",
        $three_ds_data
    );
}

var_dump($response);