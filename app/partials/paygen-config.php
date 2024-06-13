<!-- Paygen Configuration -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        CollectJS.configure({
            'theme': 'material',
            'customCss': {
                'border-width' : '1px',
                'border-radius': '0.5rem',
                'border-color': '#d1d5db',
                'padding': '10px 40px 10px 10px',
                'height': '44px'
            },
            'invalidCss': {
                'border-color': '#f87171',
                'color': '#f87171',
            },
            'validCss': {
                'border-color': '#22c55e',
            },
            'focusCss': {
                'border-color': '#1d4ed8',
                'border-width': '2px'
            },
            'paymentSelector' : '#card-pay-button',
            'fields': {
                'ccnumber': {
                    'placeholder': '0000 0000 0000 0000',
                },
                'cvv': {
                    'placeholder': '***',
                },
                'ccexp': {
                    'placeholder': '00 / 00',
                },
                'googlePay': {
                    'selector': '#google-pay-button',
                    'buttonType': 'pay',
                    'emailRequired': true,
                    'shippingAddressRequired': true,
                    'shippingAddressParameters': {
                        'phoneNumberRequired': true,
                        'allowedCountryCodes': ['US', 'CA']
                    },
                    'billingAddressRequired': true,
                    'billingAddressParameters': {
                        'phoneNumberRequired': true,
                        'format': 'MIN'
                    },
                },
                'applePay' : {
                    'selector': '#apple-pay-button',
                    'type': 'buy',
                },
            },
            "price": "<?= PAY_AMOUNT ?>",
            "currency":"<?= PAY_CURRENCY ?>",
            "country": "<?= PAY_COUNTRY ?>",
            'callback' : function(response) {
                let checkout = document.getElementById("checkout-form");
                let payment_token = document.createElement("input");
                payment_token.type = "hidden";
                payment_token.name = "payment_token";
                payment_token.value = response.token;
                checkout.appendChild(payment_token);
                checkout.submit();
            }
        });
    });
</script>