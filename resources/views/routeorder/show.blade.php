<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <header class="bg-gray-800 py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="text-xl font-bold">Halcon System</h1>
            <nav class="d-flex gap-3">
        </div>
    </header>


    <main class="container mt-5">
        <h1 class="text-center mb-4">Route Order Details (ID: {{ $routeOrder->id }})</h1>
        <div class="card bg-dark text-white border-light">
            <div class="card-header bg-gray-800">
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
        <div class="mt-3 d-flex justify-content-end">
            <a href="{{ route('routeOrder.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </main>
</body>
</html>