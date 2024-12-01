<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Purchase Details (ID: {{ $purchasing->id }})</h1>
        <div class="mb-3">
            <strong>Purchase Order Number:</strong> {{ $purchasing->purchase_order_number }}
        </div>
        <div class="mb-3">
            <strong>Supplier Name:</strong> {{ $purchasing->supplier_name }}
        </div>
        <div class="mb-3">
            <strong>Details:</strong>
            <p>{{ $purchasing->purchase_details }}</p>
        </div>
        <a href="{{ route('purchasings.index') }}" class="btn btn-secondary">Back to Purchases</a>
    </div>
</body>
</html>