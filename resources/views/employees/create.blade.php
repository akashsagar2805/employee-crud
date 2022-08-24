<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employees</title>
</head>

<body>
    <h1>Add Employee</h1>
    <form action="{{ url('/employees') }}" method="post">
        @csrf
        <label>Employee Name :</label>
        <input type="text" placeholder="Enter Name" name="name">
        @error('name')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br>
        <br>

        <label>Employee Email :</label>
        <input type="email" placeholder="Enter Email" name="email">
        @error('email')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>

        <label>Employee Phone :</label>
        <input type="text" placeholder="Enter Phone" name="phone">
        @error('phone')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>

        <label>Employee Designation :</label>
        <select name="designation">
            <option value="">Select Designation</option>
            <option value="manager">Manager</option>
            <option value="tester">Tester</option>
            <option value="team-lead">Team Lead</option>
            <option value="junior-developer">Junior Developer</option>
            <option value="senior-developer">Senior Developer</option>
            <option value="intern">Intern</option>
        </select>
        @error('designation')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br>
        <br>

        <label>Employee Salary :</label>
        <input type="text" placeholder="Enter Salary" name="salary">
        @error('salary')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>

        <label>Employee State :</label>
        <select name="state">
            <option value="">Select State</option>
            <option value="maharashtra">Maharashtra</option>
            <option value="uttarpradesh">Uttarpradesh</option>
            <option value="madhyapradesh">Madhyapradesh</option>
            <option value="gujrat">Gujrat</option>
            <option value="telangana">Telangana</option>
            <option value="rajesthan">Rajesthan</option>
        </select>
        @error('state')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>


        <label>Employee City :</label>
        <input type="text" placeholder="Enter city" name="city">
        @error('city')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>
        <label>Employee Address :</label>
        <textarea name="address" placeholder="" cols="30" rows="10"></textarea>
        @error('city')
            <div style=color:red>{{ $message }}</div>
        @enderror
        <br><br>

        <button type="submit">Add Employee</button>
    </form>

</body>


</html>
