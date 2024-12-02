<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <header class="bg-gray-800 py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="text-xl font-bold">Halcon System</h1>
            <nav class="d-flex gap-3">
            
            </nav>
        </div>
    </header>


    <main class="container mt-5">
        <h1 class="text-center mb-4">Edit Sale (ID: {{ $sale->id }})</h1>


        <form action="{{ route('sales.update', $sale->id) }}" method="POST" class="p-4 bg-dark text-white border rounded">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="sales_name" class="form-label">Sales Name</label>
                <input type="text" name="sales_name" id="sales_name" class="form-control bg-dark text-white" 
                       value="{{ old('sales_name', $sale->sales_name) }}" placeholder="Enter sales name" required>
            </div>

            <div class="mb-3">
                <label for="order_details" class="form-label">Order Details</label>
                <textarea name="order_details" id="order_details" class="form-control bg-dark text-white" 
                          rows="3" placeholder="Enter order details" required>{{ old('order_details', $sale->order_details) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="customer_details" class="form-label">Customer Details</label>
                <textarea name="customer_details" id="customer_details" class="form-control bg-dark text-white" 
                          rows="3" placeholder="Enter customer details" required>{{ old('customer_details', $sale->customer_details) }}</textarea>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Update Sale</button>
                <a href="{{ route('sales.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </main>
</body>
</html>