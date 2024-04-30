<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admine Dashboard</title>
</head>
<body>
    <h1>welcom to the dashboard</h1>
    <a href="{{ url('/filliers') }}">Show Filliers</a><br>
    <a href="{{ url('/modules/add') }}">add Modules</a><br>
    <a href="{{ url('/listUsers') }}">Show Students status</a><br>
    <a href="{{ url('/grades/add') }}">Add Grades</a><br>
    <a href="{{ url('/logout') }}">Logout</a>
</body>
</html>