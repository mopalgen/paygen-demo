<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./img/favicon.ico"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://paygen.transactiongateway.com/js/v1/Gateway.js"></script>
    <script src="https://paygen.transactiongateway.com/token/Collect.js"
            data-tokenization-key="<?= PUBLIC_SECURITY_KEY ?>"
            data-variant="inline"
    ></script>
    <title>Paygen Payment Gateway Demo</title>
</head>
<body>
<header class="flex justify-center">
    <img src="./img/logo.webp" class="h-14 mt-10">
</header>
<div class="max-w-6xl mx-auto p-10">
    <h1 class="font-bold text-center mb-5">PayGen Integration Demo</h1>