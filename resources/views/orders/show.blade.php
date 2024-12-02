<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-dark text-white">
    <div class="container mt-5">
        <h1 class="text-center badge text-bg-secondary">Order Details (ID: {{ $order->id }})</h1>
        <ul class="list-group">
            <li class="list-group-item"><strong>Invoice Number:</strong> {{ $order->invoice_number }}</li>
            <li class="list-group-item"><strong>Order Details:</strong> {{ $order->details_order }}</li>
            <li class="list-group-item"><strong>Fiscal Data:</strong> {{ $order->fiscal_data }}</li>
            <li class="list-group-item"><strong>Delivery Address:</strong> {{ $order->delivery_address }}</li>
            <li class="list-group-item"><strong>Status:</strong> {{ $order->order_status }}</li>
            <li class="list-group-item"><strong>Extra Info:</strong> {{ $order->extra_info }}</li>
            <li class="list-group-item"><strong>Photo Loaded:</strong> {{ $order->photo_Loaded }}</li>
            <li class="list-group-item"><strong>Photo Delivered:</strong> {{ $order->photo_Delivered_Order }}</li>
        </ul>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <div class="btn-group">
            <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to All Orders</a>
            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary">Edit Order</a>
            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Order</button>
            </form>
        </div>
    </div>
</body>
</html>