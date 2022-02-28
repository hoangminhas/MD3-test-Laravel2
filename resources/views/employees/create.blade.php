<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
</head>
<body>
<h2>Add employee</h2>
<form action="{{route('employees.store')}}" method="post">
    @csrf
    <input type="text" name="employeeNumber" placeholder="employee Number"><br>
    <input type="text" name="lastName" placeholder="last Name"><br>
    <input type="text" name="firstName" placeholder="first Name"><br>
    <input type="text" name="extension" placeholder="extension"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="text" name="officeCode" placeholder="office Code"><br>
    <input type="text" name="reportsTo" placeholder="reports To"><br>
    <input type="text" name="jobTitle" placeholder="job Title"><br>
    <button>Add</button>
</form>
</body>
</html>
