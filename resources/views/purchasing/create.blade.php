<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Purchase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Create New Purchase</h1>
        <form action="{{ route('purchasings.store') }}" method="POST" class="p-3 border rounded">
            @csrf
            <div class="mb-3">
                <label for="purchase_order_number" class="form-label">Purchase Order Number</label>
                <input type="text" name="purchase_order_number" id="purchase_order_number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="supplier_name" class="form-label">Supplier Name</label>
                <input type="text" name="supplier_name" id="supplier_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="purchase_details" class="form-label">Details</label>
                <textarea name="purchase_details" id="purchase_details" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Purchase</button>
        </form>
    </div>
</body>
</html>