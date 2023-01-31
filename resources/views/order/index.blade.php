<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            ORDER LIST
        </h2>
    </x-slot>

    <br>
    <table class="table-auto w-3/4 rounded-lg outline bg-gray-800 divide-y-2 divide-gray-500 border-gray-500 mx-auto text-gray-800 dark:text-gray-200 text-md">
        <thead>
            <tr class="divide-x divide-gray-500 h-12">
                <th>Date</th>
                <th>Customer</th>
                <th>Products</th>
                <th>Link</th>
                <th>Price</th>
                <th>Paid</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-500">
        @foreach ($orders as $order)
            <tr class="divide-x divide-gray-500 hover:bg-gray-700 h-12">
                <?php $datetimearray = explode(" ", $order->created_at);
                $date = date('d-m-Y',strtotime($datetimearray[0]));
                ?>
                <th>{{ $date }}</th>
                <th>{{ $order->customer }}</th>
                <th>{{ $order->products }}</th>
                <th>{{ $order->url }}</th>
                <th>{{ $order->price }}.000</th>
                <th><input type="checkbox" name="paid" id="paid" value="1" 
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->paid == '1') echo 'checked'?> disabled></th>
                <th>{{ $order->status }}</th>
                <th><a href="{{route('order.edit', $order)}}"><x-secondary-button>Edit</x-secondary-button></a></th>
            </tr>
        @endforeach
        </tbody>
</x-app-layout>