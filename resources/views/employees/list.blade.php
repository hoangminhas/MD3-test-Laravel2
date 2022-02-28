<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show All Employees</title>
</head>
<body>
<a href="{{route('employees.create')}}">Add</a>
<table border="10">
    <thead>
    <tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Job Title</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
    <tr>
        <td>{{$employee->employeeNumber}}</td>
        <td>{{$employee->lastName}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->jobTitle}}</td>
        <td><a href="{{route('employees.detail', $employee->employeeNumber)}}">Detail</a></td>
        <td><a href="">Delete</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
