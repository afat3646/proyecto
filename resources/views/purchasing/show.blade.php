<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Details</title>
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
        <h1 class="text-center mb-4">Purchase Details (ID: {{ $purchasing->id }})</h1>
        <div class="card bg-secondary text-light p-4 shadow-sm">
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
        </div>
        <div class="mt-4 d-flex justify-content-between">
            <a href="{{ route('purchasings.index') }}" class="btn btn-secondary">Back to Purchases</a>
        </div>
    </main>

</body>
</html>