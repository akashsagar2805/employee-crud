<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manager Detail</title>
</head>
<body>
    <h1>Manager Detail <a href="{{url('/managers')}}">Managers List</a></h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <td>{{$manager->name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$manager->email}}</td>
        </tr>

    </table>
</body>
</html>
