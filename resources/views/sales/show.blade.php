<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale Details</title>
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
        <h1 class="text-center mb-4">Sale Details (ID: {{ $sale->id }})</h1>

  
        <div class="card bg-dark border-light text-white shadow-sm">
            <div class="card-body">
                <h5 class="card-title"><strong>Sales Name:</strong> {{ $sale->sales_name }}</h5>
                <p class="card-text"><strong>Order Details:</strong> {{ $sale->order_details }}</p>
                <p class="card-text"><strong>Customer Details:</strong> {{ $sale->customer_details }}</p>
            </div>
        </div>

   
        <div class="mt-4 d-flex justify-content-between">
            <a href="{{ route('sales.index') }}" class="btn btn-secondary">Back to Sales</a>
        </div>
    </main>
</body>
</html>