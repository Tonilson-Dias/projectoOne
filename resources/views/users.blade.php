<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    
</head>
<body>
    <h1>Users</h1>
    <table>
        <thead></thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['username'] }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
</body>
</html>