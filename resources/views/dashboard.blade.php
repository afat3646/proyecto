<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            
            <div class="flex gap-2">
                <a href="{{ route('routeOrder.index') }}" class="btn px-3 py-2 text-white">Route Orders</a>
                <a href="{{ route('sales.index') }}" class="btn px-3 py-2 text-white">Sales</a>
                <a href="{{ route('warehouses.index') }}" class="btn px-3 py-2 text-white">Warehouse</a>
                <a href="{{ route('customers.index') }}" class="btn px-3 py-2 text-white">Customer</a>
                <a href="{{ route('purchasings.index') }}" class="btn px-3 py-2 text-white">Purchasing</a>
                <a href="{{ route('orders.index') }}" class="btn px-3 py-2 text-white">Orders</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome to Halcon system please select the section you want see") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>