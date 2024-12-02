<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
        <h1 class="mb-4 text-center">Edit Order (ID: {{ $order->id }})</h1>
        <form action="{{ route('orders.update', $order->id) }}" method="POST" class="p-3 border rounded">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="invoice_number" class="form-label">Invoice Number</label>
                <input type="text" name="invoice_number" id="invoice_number" value="{{ $order->invoice_number }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="details_order" class="form-label">Order Details</label>
                <input type="text" name="details_order" id="details_order" value="{{ $order->details_order }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="fiscal_data" class="form-label">Fiscal Data</label>
                <input type="text" name="fiscal_data" id="fiscal_data" value="{{ $order->fiscal_data }}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="delivery_address" class="form-label">Delivery Address</label>
                <input type="text" name="delivery_address" id="delivery_address" value="{{ $order->delivery_address }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="order_status" class="form-label">Order Status</label>
                <select name="order_status" id="order_status" class="form-control" required>
                    <option value="ordered" {{ $order->order_status == 'ordered' ? 'selected' : '' }}>Ordered</option>
                    <option value="in_process" {{ $order->order_status == 'in_process' ? 'selected' : '' }}>In Process</option>
                    <option value="in_route" {{ $order->order_status == 'in_route' ? 'selected' : '' }}>In Route</option>
                    <option value="delivered" {{ $order->order_status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="extra_info" class="form-label">Extra Info</label>
                <textarea name="extra_info" id="extra_info" class="form-control" rows="3">{{ $order->extra_info }}</textarea>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn btn-success">Save Changes</button>
                <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to All Orders</a>
            </div>
        </form>
    </main>

</body>
</html>