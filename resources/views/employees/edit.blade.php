<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Employees</title>
</head>

<body>
    <h1>Edit Employee</h1>
    <form action="{{ url('/employees/' . $employee->id) }}" method="post">
        @method('put')
        @csrf
        <label>Employee Name :</label>
        <input type="text" placeholder="Enter Name" name="name" value="{{$employee->name}}">
        @error('name')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br>
        <br>

        <label>Employee Email :</label>
        <input type="email" placeholder="Enter Email" name="email" value="{{$employee->email}}">
        @error('email')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>
        <label for="manager">Employee Manager :</label>
        <select name="manager">
            <option value="">Select Manager</option>
            @foreach ($managers as $manager)
            <option value="{{ $manager->id }}" {{$employee->manager_id == $manager->id ? 'selected' : ''}}>{{ $manager->name }}</option>
            @endforeach
         </select>
        @error('manager')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br>
        <br>


        <label>Employee Phone :</label>
        <input type="text" placeholder="Enter Phone" name="phone" value="{{$employee->phone}}">
        @error('phone')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>

        <label>Employee Designation :</label>
        <select name="designation">
            <option value="">Select Designation</option>
            <option value="manager" {{$employee->designation == 'manager' ? 'selected' : ''}}>Manager</option>
            <option value="tester" {{$employee->designation == 'tester' ? 'selected' : ''}}>Tester</option>
            <option value="team-lead" {{$employee->designation == 'team-lead' ? 'selected' : ''}}>Team Lead</option>
            <option value="junior-developer" {{$employee->designation == 'junior-developer' ? 'selected' : ''}}>Junior Developer</option>
            <option value="senior-developer" {{$employee->designation == 'senior-developer' ? 'selected' : ''}}>Senior Developer</option>
            <option value="intern" {{$employee->designation == 'intern' ? 'selected' : ''}}>Intern</option>
        </select>
        @error('designation')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br>
        <br>

        <label>Employee Salary :</label>
        <input type="text" placeholder="Enter Salary" name="salary" value="{{$employee->salary}}">
        @error('salary')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>

        <label>Employee State :</label>
        <select name="state">
            <option value="">Select State</option>
            <option value="maharashtra" {{$employee->state == 'maharashtra' ? 'selected' : ''}}>Maharashtra</option>
            <option value="uttarpradesh" {{$employee->state == 'uttarpradesh' ? 'selected' : ''}}>Uttarpradesh</option>
            <option value="madhyapradesh" {{$employee->state == 'madhyapradesh' ? 'selected' : ''}}>Madhyapradesh</option>
            <option value="gujrat" {{$employee->state == 'gujrat' ? 'selected' : ''}}>Gujrat</option>
            <option value="telangana" {{$employee->state == 'telangana' ? 'selected' : ''}}>Telangana</option>
            <option value="rajesthan" {{$employee->state == 'rajesthan' ? 'selected' : ''}}>Rajesthan</option>
        </select>
        @error('state')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>


        <label>Employee City :</label>
        <input type="text" placeholder="Enter city" name="city" value="{{$employee->city}}">
        @error('city')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>
        <label>Employee Address :</label>
        <textarea name="address" placeholder="" cols="30" rows="10">{{$employee->address}}
        </textarea>
        @error('city')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>

        <button type="submit">Update Employee</button>
    </form>

</body>


</html>
