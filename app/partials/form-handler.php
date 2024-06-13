<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('form_data', () => ({
            shipping_address_same_as_billing : true,
            payment_method: 'card',
            order_details: <?= json_encode($order_details, true) ?>,
            billing_address: {
                firstname: '',
                lastname: '',
                address1: '',
                address2: '',
                city: '',
                state: '',
                country: 'US',
                zip: ''
            },
            shipping_address: {
                firstname: '',
                lastname: '',
                address1: '',
                address2: '',
                city: '',
                state: '',
                country: 'US',
                zip: ''
            },
            updateAddress() {
                if (this.shipping_address_same_as_billing === true) {
                    this.shipping_address.firstname = this.billing_address.firstname;
                    this.shipping_address.lastname = this.billing_address.lastname;
                    this.shipping_address.address1 = this.billing_address.address1;
                    this.shipping_address.address2 = this.billing_address.address2;
                    this.shipping_address.city = this.billing_address.city;
                    this.shipping_address.state = this.billing_address.state;
                    this.shipping_address.country = this.billing_address.country;
                    this.shipping_address.zip = this.billing_address.zip;
                } else {
                    this.shipping_address.firstname = "";
                    this.shipping_address.lastname = "";
                    this.shipping_address.address1 = "";
                    this.shipping_address.address2 = "";
                    this.shipping_address.city = "";
                    this.shipping_address.state = "";
                    this.shipping_address.country = "";
                    this.shipping_address.zip = "";
                }
            },
            toggleShippingAddress() {
                this.shipping_address_same_as_billing = !this.shipping_address_same_as_billing;
                this.updateAddress();
            }
        }));
    })
</script>