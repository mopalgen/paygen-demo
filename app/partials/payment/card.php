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
        <button type="submit" id="card-pay-button" class="flex w-full mt-5 items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800">Pay with your card</button>
    </div>
</div>