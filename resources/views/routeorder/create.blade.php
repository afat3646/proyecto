<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Route Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Create New Route Order</h1>
        <form action="{{ route('routeOrder.store') }}" method="POST" class="p-3 border rounded">
            @csrf

            <div class="mb-3">
    <label for="order_id" class="form-label">Select Order</label>
    <select name="order_id" id="order_id" class="form-control" required>
        <option value="" disabled selected>Select an order</option>
        @foreach($orders as $order)
            <option value="{{ $order->id }}" {{ old('order_id') == $order->id ? 'selected' : '' }}>
                {{ $order->id }} - {{ $order->invoice_number }}
            </option>
        @endforeach
    </select>
</div>
            
            <div class="mb-3">
                <label for="route_name" class="form-label">Route Name</label>
                <input type="text" name="route_name" id="route_name" class="form-control" 
                       value="{{ old('route_name') }}" placeholder="Enter the route name" required>
            </div>

            
            <div class="mb-3">
                <label for="route_status" class="form-label">Route Status</label>
                <select name="route_status" id="route_status" class="form-control" required>
                    <option value="" disabled selected>Select a status</option>
                    <option value="Delayed" {{ old('route_status') == 'Delayed' ? 'selected' : '' }}>Delayed</option>
                    <option value="In progress" {{ old('route_status') == 'In progress' ? 'selected' : '' }}>In progress</option>
                    <option value="Delivered" {{ old('route_status') == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Create Route Order</button>
                <a href="{{ route('routeOrder.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>