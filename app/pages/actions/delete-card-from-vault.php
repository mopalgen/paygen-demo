<?php
$customer = new Mopalgen\Paygen\Customer();
$response = $customer->deleteCardFromCustomerVault(SECURITY_KEY, $_POST['customer_vault_id']);
var_dump($response);
