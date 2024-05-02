<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome to the Dashboard</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{ url('/filliers') }}">Show Filliers</a></li>
                            <li class="list-group-item"><a href="{{ url('/modules/add') }}">Add Modules</a></li>
                            <li class="list-group-item"><a href="{{ url('/listUsers') }}">Show Students status</a></li>
                            <li class="list-group-item"><a href="{{ route('grades.selectView') }}">Add Grades</a></li>
                            <li class="list-group-item">
                                <a href="{{ url('/logout') }}" class="btn btn-danger">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
