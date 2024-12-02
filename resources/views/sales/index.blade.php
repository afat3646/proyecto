<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
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
        <h1 class="text-center mb-4">Sales</h1>
        <a href="{{ route('sales.create') }}" class="btn btn-primary mb-3">Create New Sale</a>


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Sales Name</th>
                    <th>Order Details</th>
                    <th>Customer Details</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($sales as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>{{ $sale->sales_name }}</td>
                        <td>{{ $sale->order_details }}</td>
                        <td>{{ $sale->customer_details }}</td>
                        <td>
                            <a href="{{ route('sales.show', $sale->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No sales records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </main>
</body>
</html>