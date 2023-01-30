<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            New order
        </h2>
    </x-slot>

    <form method="post" action="{{route('order.store')}}"
    class="w-1/2 container flex flex-col mx-auto text-gray-800 dark:text-gray-200">
    @csrf
            <label for="customer" class="font-semibold leading-none mt-4">Customer</label>
            <input type="text" name="customer" id="customer" required 
            class="w-auto py-2 border border-gray-300 rounded-md text-gray-800">
        <br>
            <label for="products" class="font-semibold leading-none mt-4">Products</label>
            <textarea name="products" id="products" rows="3" required 
            class="w-auto border border-gray-300 rounded-md text-gray-800"></textarea>
        <br>
            <label for="url" class="font-semibold leading-none mt-4">Link</label>
            <input id="url" type="url" name="url" class="w-auto py-2 border border-gray-300 rounded-md text-gray-800">
        <br>
        <div class="flex justify-between">
            <div>
                <label for="estimated" class="font-semibold leading-none mt-4">Estimated delivery</label>
                <input id="estimated" type="date" name="estimated" class="w-36 py-2 border border-gray-300 rounded-md text-gray-800">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" name="price" id="price" step="10" required 
                class="w-auto py-2 border border-gray-300 rounded-md text-gray-800">
                k VND
            </div>
        </div>
        <br>
        <x-primary-button class="mt-4 mx-auto">
            Create
        </x-primary-button>
    </form>
</x-app-layout>
