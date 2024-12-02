<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Purchases</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <h1 class="text-center mb-4">All Purchases</h1>
        <a href="{{ route('purchasings.create') }}" class="btn btn-primary mb-3">Create New Purchase</a>

        <div class="row">
            @foreach ($purchasings as $purchasing)
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card bg-secondary text-light shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Purchase ID: {{ $purchasing->id }}</h5>
                            <p><strong>Order Number:</strong> {{ $purchasing->purchase_order_number }}</p>
                            <p><strong>Supplier Name:</strong> {{ $purchasing->supplier_name }}</p>
                            <p><strong>Details:</strong> {{ $purchasing->purchase_details }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('purchasings.show', $purchasing->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('purchasings.edit', $purchasing->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('purchasings.destroy', $purchasing->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

</body>
</html>