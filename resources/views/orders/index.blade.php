<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-dark text-white">

    <header class="bg-gray-800 py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="text-xl font-bold">Halcon System</h1>
            <nav class="d-flex gap-3">
                <a href="{{ route('dashboard') }}" class="btn px-3 py-2 text-white">Dashboard</a>
                <a href="{{ route('routeOrder.index') }}" class="btn px-3 py-2 text-white">Route Orders</a>
                <a href="{{ route('sales.index') }}" class="btn px-3 py-2 text-white">Sales</a>
                <a href="{{ route('warehouses.index') }}" class="btn px-3 py-2 text-white">Warehouse</a>
                <a href="{{ route('customers.index') }}" class="btn px-3 py-2 text-white">Customer</a>
                <a href="{{ route('purchasings.index') }}" class="btn px-3 py-2 text-white">Purchasing</a>
                <a href="{{ route('orders.index') }}" class="btn px-3 py-2 text-white">Orders</a>
            </nav>
        </div>
    </header>

    <main class="container mt-5">
        <h1 class="mb-4 text-center">All Orders</h1>
        <a href="{{ route('orders.create') }}" class="btn btn-primary btn-sm mb-4">Create New Order</a>
        <div class="row">
            @foreach ($orders as $order)
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="bg-secondary text-light shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Order ID: {{ $order->id }}</h5>
                            <p><strong>Invoice Number:</strong> {{ $order->invoice_number }}</p>
                            <p><strong>Order Details:</strong> {{ $order->details_order }}</p>
                            <p><strong>Fiscal Data:</strong> {{ $order->fiscal_data }}</p>
                            <p><strong>Delivery Address:</strong> {{ $order->delivery_address }}</p>
                            <p><strong>Status:</strong> {{ $order->order_status }}</p>
                            <p><strong>Extra Info:</strong> {{ $order->extra_info }}</p>
                            <p><strong>Photo Loaded:</strong> {{ $order->photo_Loaded }}</p>
                            <p><strong>Photo Delivered:</strong> {{ $order->photo_Delivered_Order }}</p>
                            
                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm mt-2">View Order</a>
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm mt-2">Edit Order</a> <!-- Edit Button -->
                            
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete Order</button>
                            </form>
                        </div>  
                    </div>
                </div>
            @endforeach
        </div>
    </main>

</body>
</html>