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
    <div class="container">
    <a href="{{route('orders.create')}}" class="btn btn-primary btn-sm">Create new category</a>

    </div>
   
    <div class="container mt-5">
        <h1 class="mb-4 text-center">All Orders</h1>
        <div class="row">
            @foreach ($orders as $order)
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Order ID: {{ $order->id }}</h5>
                        <p class="card-text"><strong>Invoice Number:</strong> {{ $order->invoice_number }}</p>
                        <p class="card-text"><strong>Order Details:</strong> {{ $order->details_order }}</p>
                        <p class="card-text"><strong>Fiscal Data:</strong> {{ $order->fiscal_data }}</p>
                        <p class="card-text"><strong>Delivery Address:</strong> {{ $order->delivery_address }}</p>
                        <p class="card-text"><strong>Status:</strong> {{ $order->status }}</p>
                        <p class="card-text"><strong>Extra Info:</strong> {{ $order->extra_info }}</p>
                        <p class="card-text"><strong>Photo Loaded:</strong> {{ $order->photo_Loaded }}</p>
                        <p class="card-text"><strong>Photo Delivered:</strong> {{ $order->photo_Delivered_Order }}</p>
                    </div>  
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>