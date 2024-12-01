<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Route Orders</h1>
        <a href="{{ route('routeOrder.create') }}" class="btn btn-primary mb-3">Create New Route Order</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order ID</th>
                    <th>Route Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($routeOrders as $routeOrder)
                    <tr>
                        <td>{{ $routeOrder->id }}</td>
                        <td>{{ $routeOrder->order_id ?? 'N/A' }}</td> 
                        <td>{{ $routeOrder->route_name ?? 'N/A' }}</td>
                        <td>
                        <span class="badge 
                        {{ $routeOrder->route_status === 'Pending' ? 'rounded-pill text-bg-warning' : '' }}
                        {{ $routeOrder->route_status === 'In progress' ? 'rounded-pill text-bg-primary' : '' }}
                        {{ $routeOrder->route_status === 'Delivered' ? 'rounded-pill text-bg-success' : '' }}
                        {{ $routeOrder->route_status === 'Delayed' ? 'rounded-pill text-bg-danger' : '' }}">
                        {{ $routeOrder->route_status ?? 'N/A' }}
                        </span>
                        </td>
                        <td>
                            <a href="{{ route('routeOrder.show', $routeOrder->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('routeOrder.edit', $routeOrder->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('routeOrder.destroy', $routeOrder->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No route orders found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>