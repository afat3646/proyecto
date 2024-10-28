<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All users</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>role</th>
                <th>email</th>
            </tr>

        </thead>

        <tbody>
            @foreach($userses as $user)
                <tr>
                <td>({$user->id})</td>
                <td>({$user->name})</td>
                <td>({$user->role})</td>
                <td>({$user->email})</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>