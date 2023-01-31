<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            EDIT ORDER
        </h2>
    </x-slot>

    <form method="post" action="{{route('order.store')}}"
    class="w-1/2 container flex flex-col mx-auto text-gray-800 dark:text-gray-200">
    @csrf
            <label for="customer" class="font-semibold leading-none mt-4">Customer</label>
            <input type="text" name="customer" id="customer" value="{{old('customer',$order->customer)}}" required 
            class="w-auto py-2 border border-gray-300 rounded-lg text-gray-800">
        <br>
            <label for="products" class="font-semibold leading-none mt-4">Products</label>
            <textarea name="products" id="products" rows="3" required 
            class="w-auto border border-gray-300 rounded-lg text-gray-800">{{old('products')}}</textarea>
        <br>
            <label for="url" class="font-semibold leading-none mt-4">Link</label>
            <input id="url" type="url" name="url" value="{{old('url',$order->url)}}"
            class="w-auto py-2 border border-gray-300 rounded-lg text-gray-800">
        <br>
        <label for="note" class="font-semibold leading-none mt-4">Note</label>
            <input type="text" name="note" id="note" value="{{old('note',$order->note)}}"
            class="w-auto py-2 border border-gray-300 rounded-lg text-gray-800">
        <br>
        <div class="flex justify-between">
            <div>
                <label for="estimated" class="font-semibold leading-none mt-4">Estimated delivery</label>
                <input id="estimated" type="date" name="estimated" value="{{old('estimated',$order->estimated)}}"
                class="w-36 py-2 border border-gray-300 rounded-lg text-gray-800">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" name="price" id="price" step="10" value="{{old('price',$order->price)}}"
                class="w-auto py-2 border border-gray-300 rounded-lg text-gray-800">
                k VND
            </div>
        </div>
        <br>
        <div class="flex justify-around">
            <div>
                <label for="paid" class="font-semibold leading-none mt-4">Paid</label>
                <input id="unpaid" type="hidden" name="paid" value="0">
                <input type="checkbox" name="paid" id="paid" value="1" 
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->paid == '1') echo 'checked'?>>
            </div>
            <div>
                <label for="status" class="font-semibold leading-none mt-4">Pending</label>
                <input id="pending" type="radio" name="status" value="Pending"
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->status == 'Pending') echo 'checked'?>>
            </div>
            <div>
                <label for="status" class="font-semibold leading-none mt-4">Purchased</label>
                <input id="purchased" type="radio" name="status" value="Purchased"
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->status == 'Purchased') echo 'checked'?>>

            </div>
            <div>
                <label for="in-stock" class="font-semibold leading-none mt-4">In-stock</label>
                <input id="in-stock" type="radio" name="status" value="In-stock"
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->status == 'In-stock') echo 'checked'?>>
            </div>
            <div>
                <label for="arrived" class="font-semibold leading-none mt-4">Arrived</label>
                <input id="arrived" type="radio" name="status" value="Arrived"
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->status == 'Arrived') echo 'checked'?>>
            </div>

        </div>
        <br>
        <x-primary-button class="mt-4 mx-auto">
            Create
        </x-primary-button>
    </form>
</x-app-layout>
