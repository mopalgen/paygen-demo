<?php
$order_details = [
    'order_id' => '1',
    'billing_country' => 'US',
    'billing_currency' => 'USD',
    'items' => [
        [
            'name' => 'Product #1',
            'price' => '10.00',
            'qty' => 1,
            'subtotal' => '10.00',
        ],
        [
            'name' => 'Product #2',
            'price' => '10.00',
            'qty' => 2,
            'subtotal' => '20.00',
        ]
    ],
    'sub_total' => '30.00',
    'tax' => '6.00',
    'shipping_rate' => '5.00',
    'total' => '41.00'
];

define("ENABLE_KOUNT_FRAUD_DETECTION", false);
define("ENABLE_CUSTOMER_VAULT", false);

define("SECURITY_KEY","6457Thfj624V5r7WUwc5v6a68Zsd6YEm");
define("PUBLIC_SECURITY_KEY","5mN8N7-jhr55W-N22pxX-uAW2s9");
define("CHECKOUT_PUBLIC_KEY", "collect_checkout_0000000000000000000000000");
define("PAY_COUNTRY", $order_details['billing_country']);
define("PAY_CURRENCY", $order_details['billing_currency']);
define("PAY_AMOUNT", $order_details['total']);