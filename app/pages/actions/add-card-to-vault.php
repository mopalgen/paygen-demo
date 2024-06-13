<?php
$customer = new Mopalgen\Paygen\Customer();
$response = $customer->addCardToCustomerVault(SECURITY_KEY, $_POST['payment_token']);
var_dump($response);
