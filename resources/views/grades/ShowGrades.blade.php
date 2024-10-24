<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Grades</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Your Grades</h1>

        @if ($grades->isEmpty())
            <p>No grades found.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Module</th>
                        <th>Grade</th>
                        <th>Controlle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grades as $grade)
                        <tr>
                            <td>{{ $grade->module->name }}</td>
                            <td>{{ $grade->value }}</td>
                            <td>{{ $grade->controlle }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <a href="/dashboard" class="btn btn-secondary mt-3">Back to Dashboard</a>

    </div>
    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>