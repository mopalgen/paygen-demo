<?php include( App\Core\Application::BASE_PATH . 'partials/header.php'); ?>
<div x-data="form_data">
    <div class="grid grid-cols-12 items-start gap-4">
        <div class="col-span-7">
            <form id="checkout-form" method="post" action="actions/pay">
                <?php include( App\Core\Application::BASE_PATH . 'partials/billing-address.php'); ?>
                <?php include( App\Core\Application::BASE_PATH . 'partials/shipping-address.php'); ?>
                <?php include( App\Core\Application::BASE_PATH . 'partials/payment.php'); ?>
            </form>
        </div>
        <?php include( App\Core\Application::BASE_PATH . 'partials/order-summary.php'); ?>
    </div>
</div>
<?php include( App\Core\Application::BASE_PATH . 'partials/footer.php'); ?>
