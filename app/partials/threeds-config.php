<?php if (ENABLE_3DS) : ?>
    <!-- 3DS Configuration -->
    <script>
        const gateway = Gateway.create('<?= CHECKOUT_PUBLIC_KEY ?>');
        const threeDSecure = gateway.get3DSecure();
        
        // Create 3DS UI instance
        const threeDSecureUI = threeDSecure.createUI({
            containerId: 'threeds-container'
        });

        // Handle 3DS authentication result
        threeDSecureUI.on('authenticated', (result) => {
            const threeDSData = {
                cardholder_auth: result.status === 'Y' ? 'verified' : 'attempted',
                cavv: result.cavv,
                xid: result.xid,
                three_ds_version: result.version,
                directory_server_id: result.dsTransId
            };
            
            // Add 3DS data to the form
            let checkout = document.getElementById("checkout-form");
            Object.entries(threeDSData).forEach(([key, value]) => {
                let input = document.createElement("input");
                input.type = "hidden";
                input.name = "three_ds_data[" + key + "]";
                input.value = value;
                checkout.appendChild(input);
            });
            
            // Submit the form after 3DS authentication
            checkout.submit();
        });

        // Handle any errors
        threeDSecureUI.on('error', (error) => {
            console.error('3DS Error:', error);
            // You may want to show an error message to the user
            alert('3D Secure authentication failed. Please try again.');
        });
    </script>
<?php endif; ?> 