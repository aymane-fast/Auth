<!-- AddGrade.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Grades</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Choose a Fillier to Add Grade</div>

                    <div class="card-body">
                        <form action="{{ route('grades.select') }}" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="fillier_id">Fillier:</label>
                                <select name="fillier_id" id="fillier_id" class="form-control">
                                    @foreach ($filliers as $fillier)
                                        <option value="{{ $fillier->id }}">{{ $fillier->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Next</button>
                            <a href="/dashboard" class="btn btn-secondary">Back to Dashboard</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>