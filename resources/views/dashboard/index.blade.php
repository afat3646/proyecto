<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        } 
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Dashboard</h1>

    <table>
        <thead>
            <tr>id</tr>
            <tr>order_list</tr>
            <tr>Customer</tr>
            <tr>Photos_delivered</tr>
            <tr>Sales</tr>
            <tr>order_status</tr>
            <br>
            
        </thead>
        <tbody>
            @foreach ($dashboards as $dashboard)
            <td>{{$dashboard->id}}</td>
            <td>{{$dashboard->order_list}}</td>
            <td>{{$dashboard->Customer}}</td>
            <td>{{$dashboard->Photos_delivered}}</td>
            <td>{{$dashboard->Sales}}</td>
            <td>{{$dashboard->order_status}}</td>

                
            @endforeach
        </tbody>
    </table>
</body>
</html>