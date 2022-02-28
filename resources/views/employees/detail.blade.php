<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Employee</title>
</head>
<body>
<table border="30">
    <thead>
    <tr>
        <th>Employee Number</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Extension</th>
        <th>Email</th>
        <th>Office Code</th>
        <th>Reports To</th>
        <th>Job Title</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{$employee->employeeNumber}}</td>
        <td>{{$employee->lastName}}</td>
        <td>{{$employee->firstName}}</td>
        <td>{{$employee->extension}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->officeCode}}</td>
        <td>{{$employee->reportsTo}}</td>
        <td>{{$employee->jobTitle}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
