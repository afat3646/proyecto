<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
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
        <h1 class="text-center mb-4">Create New Order</h1>

        <form action="{{ route('orders.store') }}" method="POST" class="p-3 border rounded">
            @csrf

            <div class="mb-3">
                <label for="invoice_number" class="form-label">Invoice Number</label>
                <input type="text" name="invoice_number" id="invoice_number" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="details_order" class="form-label">Order Details</label>
                <input type="text" name="details_order" id="details_order" class="form-control" required>
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
                <label for="order_status" class="form-label">Order Status</label>
                <select name="order_status" id="order_status" class="form-control" required>
                    <option value="ordered">Ordered</option>
                    <option value="in_process">In Process</option>
                    <option value="in_route">In Route</option>
                    <option value="delivered">Delivered</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="extra_info" class="form-label">Extra Info</label>
                <input type="text" name="extra_info" id="extra_info" class="form-control">
            </div>

            <div class="mb-3">
                <label for="photo_Loaded" class="form-label">Photo Loaded</label>
                <input type="text" name="photo_Loaded" id="photo_Loaded" class="form-control">
            </div>

            <div class="mb-3">
                <label for="photo_Delivered_Order" class="form-label">Photo Delivered Order</label>
                <input type="text" name="photo_Delivered_Order" id="photo_Delivered_Order" class="form-control">
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Create Order</button>
                <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to All Orders</a>
            </div>
        </form>
    </main>

</body>
</html>