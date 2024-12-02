<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
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
        <h1 class="text-center mb-4">Customer List</h1>
        <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Create New Customer</a>
        <table class="table table-bordered table-striped bg-dark text-white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Fiscal Data</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->customer_name }}</td>
                        <td>{{ $customer->fiscal_Data }}</td>
                        <td>
                            <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No customers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </main>
</body>
</html>