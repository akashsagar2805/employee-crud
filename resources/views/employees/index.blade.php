<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
</head>
<body>
    <h1>Employees List <a href="/employees/create">Add Employee</a></h1>
    <table border="1">
        <tr>
           <th>Name</th>
           <th>Email</th>
           <th>Phone</th>
           <th>Designation</th>
           <th>Address</th>
           <th>Action</th>
        </tr>
        <tr>
            @foreach ($employees as $employee)

            <td>{{$employee->name}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->phone}}</td>
            <td>{{$employee->designation}}</td>
            <td>{{$employee->address}}</td>
            <td>
                <a href="{{url('/employees/' . $employee->id)}}">View</a>
                <a href="{{url('/employees/' . $employee->id .'/edit')}}">Edit</a>
                <form action="{{url('/employees/' . $employee->id)}}" method="post" style="display: inline" onclick="return confirm('Are you sure you want to delete this item?');">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
                </form>
          </td>


        </tr>
        @endforeach
    </table>
</body>
</html>
