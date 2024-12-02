<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Route Order</title>
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
        <h1 class="text-center mb-4">Edit Route Order (ID: {{ $routeOrder->id }})</h1>
        <form action="{{ route('routeOrder.update', $routeOrder->id) }}" method="POST" class="p-4 bg-dark text-white border rounded">
            @csrf
            @method('PUT')


            <div class="mb-3">
                <label for="route_name" class="form-label">Route Name</label>
                <input type="text" name="route_name" id="route_name" class="form-control bg-dark text-white" 
                       value="{{ old('route_name', $routeOrder->route_name) }}" required>
            </div>


            <div class="mb-3">
                <label for="route_status" class="form-label">Route Status</label>
                <select name="route_status" id="route_status" class="form-control bg-dark text-white" required>
                    <option value="Delayed" {{ $routeOrder->route_status === 'Delayed' ? 'selected' : '' }}>Delayed</option>
                    <option value="In progress" {{ $routeOrder->route_status === 'In progress' ? 'selected' : '' }}>In progress</option>
                    <option value="Delivered" {{ $routeOrder->route_status === 'Delivered' ? 'selected' : '' }}>Delivered</option>
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Update Route Order</button>
                <a href="{{ route('routeOrder.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </main>
</body>
</html>