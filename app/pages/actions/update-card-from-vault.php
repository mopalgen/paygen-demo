<?php
$customer = new Mopalgen\Paygen\Customer();
$response = $customer->updateCardFromCustomerVault(SECURITY_KEY, $_POST['customer_vault_id'], $_POST['payment_token']);
var_dump($response);
