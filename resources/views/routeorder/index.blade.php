<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-dark text-white">

    <header class="bg-gray-800 py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="text-xl font-bold">Halcon System</h1>
            <nav class="d-flex gap-3">
                <a href="{{ route('dashboard') }}" class="btn px-3 py-2 text-white">Dashboard</a>
                <a href="{{ route('routeOrder.index') }}" class="btn  px-3 py-2 text-white">Route Orders</a>
                <a href="{{ route('sales.index') }}" class="btn  px-3 py-2 text-white">Sales</a>
                <a href="{{ route('warehouses.index') }}" class="btn px-3 py-2 text-white">Warehouse</a>
                <a href="{{ route('customers.index') }}" class="btn  px-3 py-2 text-white">Customer</a>
                <a href="{{ route('purchasings.index') }}" class="btn  px-3 py-2 text-white">Purchasing</a>
                <a href="{{ route('orders.index') }}" class="btn px-3 py-2 text-white">Orders</a>
                
            </nav>
        </div>
    </header>

    <main class="container mt-5">
        <h1 class="text-center mb-4">Route Orders</h1>
        <a href="{{ route('routeOrder.create') }}" class="btn btn-primary mb-3">Create New Route Order</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-dark table-striped">
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
                            {{ $routeOrder->route_status === 'Pending' ? 'bg-warning text-dark' : '' }}
                            {{ $routeOrder->route_status === 'In progress' ? 'bg-primary' : '' }}
                            {{ $routeOrder->route_status === 'Delivered' ? 'bg-success' : '' }}
                            {{ $routeOrder->route_status === 'Delayed' ? 'bg-danger' : '' }}">
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
    </main>
</body>
</html>