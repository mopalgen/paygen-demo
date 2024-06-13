<?php if (ENABLE_KOUNT_FRAUD_DETECTION) : ?>
    <!-- Kount Configuration -->
    <script>
        const gateway = Gateway.create('<?= CHECKOUT_PUBLIC_KEY ?>');
        const kount = gateway.getKount();

        kount.createSession().then((response) => {
            const transactionSessionId = response;

            let checkout = document.getElementById("checkout-form");
            let transactionSessionIdInput = document.createElement("input");
            transactionSessionIdInput.type = "hidden";
            transactionSessionIdInput.name = "transaction_session_id";
            transactionSessionIdInput.value = transactionSessionId;
            checkout.appendChild(transactionSessionIdInput);
        });

        // Listen for any errors that might occur
        gateway.on('error', function (e) {
            console.error(e);
        });
    </script>
<?php endif; ?>