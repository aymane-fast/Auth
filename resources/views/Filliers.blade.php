<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filliers</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Filliers</h2>
        <ul class="list-group mt-4">
            @foreach ($filliers as $fillier)
                <li class="list-group-item">
                    <a href="{{ route('filiers.modules', ['id' => $fillier->id]) }}">{{ $fillier->name }}</a>
                </li>
            @endforeach
        </ul>
        <div class="mt-4">
            <a href="/AddFilliers" class="btn btn-primary">Add Fillier</a>
            <a href="/dashboard" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>
    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>