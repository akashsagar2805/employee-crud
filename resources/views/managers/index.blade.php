<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>managers</title>
</head>
<body>
    <h1>Managers List <a href="/managers/create">Add manager</a></h1>
    <table border="1">
        <tr>
           <th>Name</th>
           <th>Email</th>

           <th>Action</th>
        </tr>
        <tr>
            @foreach ($managers as $manager)

            <td>{{$manager->name}}</td>
            <td>{{$manager->email}}</td>

            <td>
                <a href="{{url('/managers/' . $manager->id)}}">View</a>
                <a href="{{url('/managers/' . $manager->id .'/edit')}}">Edit</a>
                <form action="{{url('/managers/' . $manager->id)}}" method="post" style="display: inline" onclick="return confirm('Are you sure you want to delete this item?');">
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

