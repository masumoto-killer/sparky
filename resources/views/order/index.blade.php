<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            ORDER LIST
        </h2>
    </x-slot>

    <br>
    <table class="table-auto w-auto rounded-lg outline bg-gray-800 divide-y-2 divide-gray-500 border-gray-500 mx-auto text-gray-800 dark:text-gray-200 text-md">
        <thead>
            <tr class="divide-x divide-gray-500 h-12">
                <th>Date</th>
                <th>Customer</th>
                <th>Products</th>
                <th>Link</th>
                <th>Estimate</th>
                <th>Price</th>
                <th>Paid</th>
                <th>Status</th>
                <th>Note</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-500">
        @foreach ($orders as $order)
            <tr class="divide-x divide-gray-500 hover:bg-gray-700 h-12">
                <?php $datetimearray = explode(" ", $order->created_at);
                $date = date('d-m-Y',strtotime($datetimearray[0]));
                ?>
                <th class="font-light">{{ $date }}</th>
                <th class="font-light">{{ $order->customer }}</th>
                <th class="font-light">{{ $order->products }}</th>
                <th><a href="{{$order->url}}" class="text-blue-400 font-extralight" 
                target="_blank" rel="noopener noreferrer">{{ $order->url }}</a></th>
                <th class="font-light">{{ $estimated=date('d-m-Y',strtotime($order->estimated)) }}</th>
                <th class="font-light">{{ $order->price }}.000</th>
                <th class="font-light"><input type="checkbox" name="paid" id="paid" value="1" 
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->paid == '1') echo 'checked'?> disabled></th>
                <th class="font-light">{{ $order->status }}</th>
                <th class="font-light">{{ $order->note }}</th>
                <th><a href="{{route('order.edit', $order)}}"><x-secondary-button>Edit</x-secondary-button></a></th>
            </tr>
        @endforeach
        </tbody>
</x-app-layout>