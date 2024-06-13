<?php include( App\Core\Application::BASE_PATH . 'partials/header.php'); ?>
<div x-data="form_data">
    <div class="grid grid-cols-12 items-start gap-4">
        <div class="col-span-3"></div>
        <div class="col-span-6">
            <div class="w-full rounded-lg border border-gray-200 bg-white shadow-sm mb-4">
                <span class="flex gap-2 font-bold border-b px-4 py-2 bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                    </svg>
                    <span>Add Card to Vault</span>
                </span>
                <div class="p-4">
                    <form id="checkout-form" method="post" action="/actions/add-card-to-vault">
                        <div class="w-full" x-show="payment_method === 'card'">
                            <div class="p-2">
                                <div class="mb-4">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-white"> Card number * </label>
                                        <div id="ccnumber" class="block w-full"></div>
                                    </div>
                                </div>
                                <div class="mb-2 grid grid-cols-2 gap-4">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-white"> Expiry * </label>
                                        <div id="ccexp" class="block w-full"></div>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-white"> CVV* </label>
                                        <div id="cvv" class="block w-full"></div>
                                    </div>
                                </div>
                                <button type="submit" id="card-pay-button" class="flex w-full mt-5 items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800">Add Card to Customer Vault</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-span-3"></div>
    </div>
</div>
<?php include( App\Core\Application::BASE_PATH . 'partials/footer.php'); ?>
