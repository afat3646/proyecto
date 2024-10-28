<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create new order</h1>
    <form action="" method"post">
        @csrf
        <label for="">invoice_number</label>
        <input type="text" invoice_number"" id"">
        <br>
        <label for="">details_order</label>
        <input type="text" details_order"" id"">
        <br>
        <label for="">customer_name</label>
        <input type="text" customer_name"" id"">
        <br>
        <label for="">fiscal_data</label>
        <input type="text" fiscal_data"" id"">
        <br>
        <label for="">delivery_address</label>
        <input type="text" delivery_address"" id"">
        <br>
        <label for="">status</label>
        <input type="text" status"" id"">
        <br>
        <label for="">extra_info</label>
        <input type="text" extra_info"" id"">
        <br>
        <input type="submit" value"Create_order">
    </form>
    
</body>
</html>