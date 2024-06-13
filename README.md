
# PayGen Payment Gateway Integration Demo

Simple demo application of PayGen Payment Gateway Integration.

***Directory / Files Explaination***

- ***app/Core/Application.php :*** Handles application bootstraping and routing. Not related PayGen Payment Integration.
- ***app/etc/config.php :*** Application and Paygen configuration.
- ***app/pages :*** All the pages and form submit actions.
- ***app/pages/actions :*** All the form submit actions.
- ***app/partials :*** Page's partials

### Demo paths:
- ***'/' :*** Simple checkout with Billing, Shipping Address and payment methods of card, Google Pay and Apple Pay ***(Action : app/pages/actions/pay.php)***
- ***'/checkout-saved-card' :*** Simple checkout with Billing, Shipping Address and payment methods of Google Pay, Apple Pay and saved card using customer_vault_id. ***(Action : app/pages/actions/pay-using-saved-card.php)***
- ***'/customer-vault' :*** Add card to customer vault. ***(Action : app/pages/actions/add-card-to-vault.php)***
