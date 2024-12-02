<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <h1 class="text-center mb-4">Warehouse Management</h1>


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="mb-4 d-flex justify-content-end">
            <a href="{{ route('warehouses.create') }}" class="btn btn-primary">Add New Warehouse Entry</a>
        </div>

        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Materials</th>
                    <th>Assigned Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($warehouses as $warehouse)
                    <tr>
                        <td>{{ $warehouse->id }}</td>
                        <td>{{ $warehouse->materials }}</td>
                        <td>{{ $warehouse->assigned_name ?? 'N/A' }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('warehouses.show', $warehouse->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('warehouses.edit', $warehouse->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('warehouses.destroy', $warehouse->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No warehouse entries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </main>
</body>
</html>