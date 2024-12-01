<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Warehouse Management</h1>
        <a href="{{ route('warehouses.create') }}" class="btn btn-primary mb-3">Add New Warehouse Entry</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Materials</th>
                    <th>Assigned Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($warehouses as $warehouse)
                    <tr>
                        <td>{{ $warehouse->id }}</td>
                        <td>{{ $warehouse->materials }}</td>
                        <td>{{ $warehouse->assigned_name }}</td>
                        <td>
                            <a href="{{ route('warehouses.show', $warehouse->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('warehouses.edit', $warehouse->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('warehouses.destroy', $warehouse->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No warehouse entries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

   </body>
</html>