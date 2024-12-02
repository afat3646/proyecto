<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Customer (ID: {{ $customer->id }})</h1>
        <form action="{{ route('customers.update', $customer->id) }}" method="POST" class="p-4 border rounded shadow-sm bg-secondary">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="customer_name" class="form-label">Customer Name</label>
                <input type="text" name="customer_name" id="customer_name" class="form-control" 
                       value="{{ old('customer_name', $customer->customer_name) }}" required>
            </div>
            <div class="mb-3">
                <label for="fiscal_Data" class="form-label">Fiscal Data</label>
                <input type="text" name="fiscal_Data" id="fiscal_Data" class="form-control" 
                       value="{{ old('fiscal_Data', $customer->fiscal_Data) }}" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Update Customer</button>
                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back to Customers</a>
            </div>
        </form>
    </div>
</body>
</html>