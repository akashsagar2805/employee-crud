<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit managers</title>
</head>

<body>
    <h1>Edit manager</h1>
    <form action="{{ url('/managers/' . $manager->id) }}" method="post">
        @method('put')
        @csrf
        <label>Manager Name :</label>
        <input type="text" placeholder="Enter Name" name="name" value="{{$manager->name}}">
        @error('name')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br>
        <br>

        <label>Manager Email :</label>
        <input type="email" placeholder="Enter Email" name="email" value="{{$manager->email}}">
        @error('email')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>


        <button type="submit">Update Manager</button>
    </form>

</body>


</html>
