<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Detail</title>
</head>
<body>
    <h1>Employee Detail <a href="{{url('/employees')}}">Employees List</a></h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <td>{{$employee->name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$employee->email}}</td>
        </tr>
        <tr>
            <th>Manager</th>
            <td>{{$manager->name}}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{$employee->phone}}</td>
        </tr>
        <tr>
            <th>Designation</th>
            <td>{{$employee->designation}}</td>
        </tr>
        <tr>
            <th>Salary</th>
            <td>{{$employee->salary}}</td>
        </tr>
        <tr>
            <th>City</th>
            <td>{{$employee->city}}</td>
        </tr>
        <tr>
            <th>State</th>
            <td>{{$employee->state}}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{$employee->address}}</td>
        </tr>
    </table>
</body>
</html>
