<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Manager</title>
</head>

<body>
    <h1>Add Manager</h1>
    <form action="{{ url('/managers') }}" method="post">
        @csrf
        <label>Manager Name :</label>
        <input type="text" placeholder="Enter Name" name="name">
        @error('name')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br>
        <br>

        <label>Manager Email :</label>
        <input type="email" placeholder="Enter Email" name="email">
        @error('email')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>
        <button type="submit">Add manager</button>
    </form>

</body>


</html>
