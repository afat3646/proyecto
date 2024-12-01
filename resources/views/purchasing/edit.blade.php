<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Purchase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Purchase (ID: {{ $purchasing->id }})</h1>
        <form action="{{ route('purchasings.update', $purchasing->id) }}" method="POST" class="p-3 border rounded">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="purchase_order_number" class="form-label">Purchase Order Number</label>
                <input type="text" name="purchase_order_number" id="purchase_order_number" class="form-control" value="{{ $purchasing->purchase_order_number }}" required>
            </div>
            <div class="mb-3">
                <label for="supplier_name" class="form-label">Supplier Name</label>
                <input type="text" name="supplier_name" id="supplier_name" class="form-control" value="{{ $purchasing->supplier_name }}" required>
            </div>
            <div class="mb-3">
                <label for="purchase_details" class="form-label">Details</label>
                <textarea name="purchase_details" id="purchase_details" class="form-control" rows="4" required>{{ $purchasing->purchase_details }}</textarea>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Update Purchase</button>
                <a href="{{ route('purchasings.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
</html>