<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Programs</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Fillier</th>
                                    <th scope="col">Day of Week</th>
                                    <th scope="col">Session Number</th>
                                    <th scope="col">Module</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($programs as $program)
                                    <tr>
                                        <td>{{ $program->fillier->name }}</td>
                                        <td>{{ $program->day_of_week }}</td>
                                        <td>{{ $program->session_number }}</td>
                                        <td>{{ $program->module->name }}</td>
                                        <td>
                                            <a href="{{ route('programs.edit', $program) }}" class="btn btn-primary">Edit</a>
                                            <form method="POST" action="{{ route('programs.destroy', $program) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>