<div class="w-full rounded-lg border border-gray-200 bg-white shadow-sm">
        <span class="flex gap-2 font-bold border-b px-4 py-2 bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
            </svg>
            <span>Payment Methods</span>
        </span>
    <div class="p-4 border-b">
        <div class="flex items-center p-2">
            <input checked id="card" type="radio" value="card" name="payment_method" x-model="payment_method" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="card" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Using saved Credit / Debit Card</label>
        </div>
        <div class="col-span-2 sm:col-span-1">
            <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-white"> Customer Vault Id </label>
            <input type="text" id="customer_vault_id" name="customer_vault_id" class="block w-full rounded-lg border border-gray-300 p-2.5 pe-10 text-sm text-gray-900">
        </div>
        <button type="submit" id="saved-card-pay-button" class="flex w-full mt-5 items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800">Pay with saved your card</button>
    </div>
    <div class="p-4 border-b">
        <div class="flex items-center p-2">
            <input id="apple_pay" type="radio" value="apple_pay" name="payment_method" x-model="payment_method" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="apple_pay" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Using Apple Pay</label>
        </div>
        <?php include( App\Core\Application::BASE_PATH . 'partials/payment/apple.php'); ?>
    </div>
    <div class="p-4">
        <div class="flex items-center p-2">
            <input id="google_pay" type="radio" value="google_pay" name="payment_method" x-model="payment_method" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="google_pay" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 cursor-pointer">Using Google Pay</label>
        </div>
        <?php include( App\Core\Application::BASE_PATH . 'partials/payment/google.php'); ?>
    </div>
</div>