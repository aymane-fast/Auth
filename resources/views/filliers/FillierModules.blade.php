<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modules for {{ $fillier->name }}</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Modules for {{ $fillier->name }}</h1>

        @if ($modules->isEmpty())
            <p>No modules found.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Hours</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($modules as $module)
                        <tr>
                            <td>{{ $module->name }}</td>
                            <td>{{ $module->description }}</td>
                            <td>{{ $module->hours }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <a href="{{ route('fillier.index') }}" class="btn btn-secondary mt-3">Back to Filliers</a>
    </div>
    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>