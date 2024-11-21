<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="container mt-5">
    <h1 class="mb-4 text-center">Dashboard</h1>
    <div class="row g-3">
    <thead class="table-dark">
    @foreach ($dashboards as $dashboard)
    <div class="col-12">
        <div class="p-3 border rounded shadow-sm">
        <p><strong>ID:</strong> {{ $dashboard->id }}</p>
        <p><strong>Order List:</strong> {{ $dashboard->order_list }}</p>
        <p><strong>Customer:</strong> {{ $dashboard->Customer }}</p>
        <p><strong>Photos Delivered:</strong> {{ $dashboard->Photos_delivered }}</p>
        <p><strong>Sales:</strong> {{ $dashboard->Sales }}</p>
        <p><strong>Order Status:</strong> {{ $dashboard->order_status }}</p>
        </div>
   
    </div>
    @endforeach
    </div>
    
</body>
</html>