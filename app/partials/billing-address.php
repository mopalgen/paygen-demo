<div class="w-full rounded-lg border border-gray-200 bg-white shadow-sm mb-4">
    <span class="flex gap-2 font-bold border-b px-4 py-2 bg-gray-100">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
        </svg>
        <span>Billing Address</span>
    </span>
    <div class="p-4">
        <div class="mb-2 grid grid-cols-2 gap-4">
            <div class="col-span-2 sm:col-span-1">
                <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-white"> First Name </label>
                <input type="text" id="firstname" x-model="billing_address.firstname" x-on:blur="updateAddress()" name="firstname" class="block w-full rounded-lg border border-gray-300 p-2.5 pe-10 text-sm text-gray-900">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-white"> Last Name </label>
                <input type="text" id="lastname" x-model="billing_address.lastname" x-on:blur="updateAddress()" name="lastname" class="block w-full rounded-lg border border-gray-300 p-2.5 pe-10 text-sm text-gray-900">
            </div>
        </div>
        <div class="mb-4">
            <div class="col-span-2 sm:col-span-1">
                <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-white"> Address Line #1 </label>
                <input type="text" id="address1" x-model="billing_address.address1" x-on:blur="updateAddress()" name="address1" class="block w-full rounded-lg border border-gray-300 p-2.5 pe-10 text-sm text-gray-900">
            </div>
        </div>
        <div class="mb-4">
            <div class="col-span-2 sm:col-span-1">
                <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-white"> Address Line #2 </label>
                <input type="text" id="address2" x-model="billing_address.address2" x-on:blur="updateAddress()" name="address2" class="block w-full rounded-lg border border-gray-300 p-2.5 pe-10 text-sm text-gray-900">
            </div>
        </div>
        <div class="mb-2 grid grid-cols-2 gap-4">
            <div class="col-span-2 sm:col-span-1">
                <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-white"> Town / City </label>
                <input type="text" id="city" x-model="billing_address.city" x-on:blur="updateAddress()" name="city" class="block w-full rounded-lg border border-gray-300 p-2.5 pe-10 text-sm text-gray-900">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-white"> State / County </label>
                <input type="text" id="state" x-model="billing_address.state" x-on:blur="updateAddress()" name="state" class="block w-full rounded-lg border border-gray-300 p-2.5 pe-10 text-sm text-gray-900">
            </div>
        </div>
        <div class="mb-2 grid grid-cols-2 gap-4">
            <div class="col-span-2 sm:col-span-1">
                <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-white"> Country </label>
                <select id="country" x-model="billing_address.country" x-on:blur="updateAddress()" name="country" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Choose a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-white"> Postcode / Zip </label>
                <input type="text" id="zip" x-model="billing_address.zip" x-on:blur="updateAddress()" name="zip" class="block w-full rounded-lg border border-gray-300 p-2.5 pe-10 text-sm text-gray-900">
            </div>
        </div>
        <div class="flex items-center mb-4 mt-6">
            <input type="checkbox" x-model="shipping_address_same_as_billing" x-on:click="toggleShippingAddress()" id="shipping_address_same_as_billing" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="shipping_address_same_as_billing" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Shipping address same as billing address</label>
        </div>
    </div>
</div>