<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Warehouse Entry</title>
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
        <h1 class="text-center mb-4">Edit Warehouse Entry (ID: {{ $warehouse->id }})</h1>

        <form action="{{ route('warehouses.update', $warehouse->id) }}" method="POST" class="p-4 bg-dark text-white border rounded shadow-sm">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="materials" class="form-label">Materials</label>
                <textarea name="materials" id="materials" class="form-control bg-dark text-white" rows="4" required>{{ old('materials', $warehouse->materials) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="assigned_name" class="form-label">Assigned Name</label>
                <input type="text" name="assigned_name" id="assigned_name" class="form-control bg-dark text-white" 
                       value="{{ old('assigned_name', $warehouse->assigned_name) }}" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Update Warehouse Entry</button>
                <a href="{{ route('warehouses.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </main>
</body>
</html>