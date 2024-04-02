<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Module</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Add Module</h2>
        <form action="{{ route('modules.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" required class="form-control">
            </div>

            <div class="form-group">
                <label for="hours">Hours:</label>
                <input type="number" id="hours" name="hours" required class="form-control">
            </div>

            <div class="form-group">
                <label for="fillier_id">Fillier:</label>
                <select name="fillier_id" id="fillier_id" class="form-control">
                    @foreach ($filliers as $fillier)
                        <option value="{{ $fillier->id }}">{{ $fillier->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Module</button>
            <a href="{{ route('fillier.index') }}" class="btn btn-secondary mt-3">Back to Filliers</a>
        </form>
    </div>
    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>