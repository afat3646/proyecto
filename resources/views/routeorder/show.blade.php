<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Route Order Details (ID: {{ $routeOrder->id }})</h1>
        <div class="card">
            <div class="card-header">
                <h4>Order Information</h4>
            </div>
            <div class="card-body">
                <p><strong>Order ID:</strong> {{ $routeOrder->order_id ?? 'N/A' }}</p>
                <p><strong>Route Name:</strong> {{ $routeOrder->route_name ?? 'N/A' }}</p>
                <p><strong>Route Status:</strong> 
                    <span class="badge 
                        {{ $routeOrder->route_status === 'Delayed' ? 'text-bg-danger' : '' }}
                        {{ $routeOrder->route_status === 'In progress' ? 'text-bg-primary' : '' }}
                        {{ $routeOrder->route_status === 'Delivered' ? 'text-bg-success' : '' }}">
                        {{ $routeOrder->route_status ?? 'N/A' }}
                    </span>
                </p>
                <p><strong>Created At:</strong> {{ $routeOrder->created_at->format('Y-m-d H:i:s') }}</p>
                <p><strong>Updated At:</strong> {{ $routeOrder->updated_at->format('Y-m-d H:i:s') }}</p>
            </div>
        </div>
        <div class="mt-3 d-flex justify-content-between">
            <a href="{{ route('routeOrder.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</body>
</html>