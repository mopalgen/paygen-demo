<div class="col-span-5 rounded-lg border border-gray-200 bg-white shadow-sm mb-4">
    <span class="flex gap-2 font-bold border-b px-4 py-2 bg-gray-100">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
        </svg>

        <span>Order Summary</span>
    </span>

    <?php foreach ($order_details['items'] as $item) : ?>
    <div class="pt-4 pb-2 pt-2 pb-2 text-sm">
        <div class="grid grid-cols-6 gap-3 mt-3 pl-4 pr-4">
            <div class="col-span-4 text-gray-600">
                <?= $item['name'] ?>
                <strong>(Qty : <?= $item['qty'] ?>)</strong>
            </div>
            <span class="col-span-2 text-right font-bold"><?= $item['subtotal'] ?><?= $order_details['billing_currency'] ?></span>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="w-100 border-b mt-5"></div>
    <div class="text-sm">
        <div class="grid grid-cols-6 gap-3 mt-3 pl-4 pr-4">
            <div class="col-span-4 text-gray-600">
                Shipping
            </div>
            <span class="col-span-2 text-right font-bold"><?= $order_details['shipping_rate'] ?><?= $order_details['billing_currency'] ?></span>
        </div>
    </div>
    <div class="text-sm">
        <div class="grid grid-cols-6 gap-3 mt-3 pl-4 pr-4">
            <div class="col-span-4 text-gray-600">
                Tax
            </div>
            <span class="col-span-2 text-right font-bold"><?= $order_details['tax'] ?><?= $order_details['billing_currency'] ?></span>
        </div>
    </div>
    <div class="w-100 border-b mt-5"></div>
    <div class="text-md pt-5 pb-5 font-bold border-b bg-gray-100">
        <div class="grid grid-cols-6 gap-3 pl-4 pr-4">
            <div class="col-span-4 text-gray-600">
                Total
            </div>
            <span class="col-span-2 text-right font-bold"><?= $order_details['total'] ?><?= $order_details['billing_currency'] ?></span>
        </div>
    </div>
</div>
