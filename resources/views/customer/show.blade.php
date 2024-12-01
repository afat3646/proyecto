<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Customer Details (ID: {{ $customer->id }})</h1>
        <ul class="list-group">
            <li class="list-group-item"><strong>Name:</strong> {{ $customer->customer_name }}</li>
            <li class="list-group-item"><strong>Fiscal Data:</strong> {{ $customer->fiscal_Data}}</li>
            
        </ul>
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back to Customers</a>
            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary">Edit Customer</a>
        </div>
    </div>
</body>
</html>