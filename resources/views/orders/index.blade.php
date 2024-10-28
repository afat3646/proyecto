<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href={{route('orders.create')}}>create new order</a>
    <h1>All orders</h1>
    <table>
        <thead>
            <tr>id</tr>
            <tr>invoice_number</tr>
            <tr>details_order</tr>
            <tr>fiscal_data</tr>
            <tr>delivery_address</tr>
            <tr>status</tr>
            <tr>extra_info</tr>
            <tr>photo_Loaded</tr>
            <tr>photo_Delivered_Order</tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <td>{{$order->id}}</td>
            <td>{{$order->invoice_number}}</td>
            <td>{{$order->details_order}}</td>
            <td>{{$order->fiscal_data}}</td>
            <td>{{$order->delivery_address}}</td>
            <td>{{$order->status}}</td>
            <td>{{$order->extra_info}}</td>
            <td>{{$order->photo_Loaded}}</td>
            <td>{{$order->photo_Delivered_Order}}</td>
                
            @endforeach
        </tbody>
    </table>
</body>
</html>