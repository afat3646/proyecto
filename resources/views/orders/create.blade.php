<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<div class="container mt-5">
        <h1 class="text-center mb-4">Create New Order</h1>
        <form action="{{ route('orders.create') }}" method="POST" class="p-3 border rounded">
            @csrf
            <div class="mb-3">
                <label for="invoice_number" class="form-label">Invoice Number</label>
                <input type="text" name="invoice_number" id="invoice_number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="details_order" class="form-label">Details Order</label>
                <input type="text" name="details_order" id="details_order" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="customer_name" class="form-label">Customer Name</label>
                <input type="text" name="customer_name" id="customer_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="fiscal_data" class="form-label">Fiscal Data</label>
                <input type="text" name="fiscal_data" id="fiscal_data" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="delivery_address" class="form-label">Delivery Address</label>
                <input type="text" name="delivery_address" id="delivery_address" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" id="status" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="extra_info" class="form-label">Extra Info</label>
                <input type="text" name="extra_info" id="extra_info" class="form-control">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Create Order</button>
            </div>
        </form>
    </div>
    
</body>
</html>