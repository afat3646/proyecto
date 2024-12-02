<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Details</title>
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
        <h1 class="text-center mb-4">Warehouse Details (ID: {{ $warehouse->id }})</h1>

        <div class="card bg-dark text-white shadow-sm p-4">
            <h5 class="card-title">Details of Warehouse Entry</h5>
            <p class="card-text"><strong>Materials:</strong> {{ $warehouse->materials }}</p>
            <p class="card-text"><strong>Assigned Name:</strong> {{ $warehouse->assigned_name }}</p>
            <p class="card-text"><strong>Created At:</strong> {{ $warehouse->created_at->format('Y-m-d H:i:s') }}</p>
            <p class="card-text"><strong>Updated At:</strong> {{ $warehouse->updated_at->format('Y-m-d H:i:s') }}</p>
        </div>

        <div class="mt-4 d-flex justify-content-between">
            <a href="{{ route('warehouses.index') }}" class="btn btn-secondary">Back to Warehouse List</a>
            <a href="{{ route('warehouses.edit', $warehouse->id) }}" class="btn btn-primary">Edit Warehouse Entry</a>
        </div>
    </main>
</body>
</html>