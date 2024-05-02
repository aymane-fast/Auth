
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Program</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Program</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('programs.update', $program) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="fillier_id">Fillier</label>
                                <select id="fillier_id" name="fillier_id" class="form-control">
                                    <!-- Populate this dropdown with filliers from the database -->
                                    @foreach ($filliers as $fillier)
                                        <option value="{{ $fillier->id }}" {{ $fillier->id == $program->fillier_id ? 'selected' : '' }}>{{ $fillier->name }}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="day_of_week">Day of Week</label>
                                <input type="text" id="day_of_week" name="day_of_week" class="form-control" value="{{ $program->day_of_week }}">
                            </div>

                            <div class="form-group">
                                <label for="session_number">Session Number</label>
                                <input type="number" id="session_number" name="session_number" class="form-control" value="{{ $program->session_number }}">
                            </div>

                            <div class="form-group">
                                <label for="module_id">Module</label>
                                <select id="module_id" name="module_id" class="form-control">
                                    <!-- Populate this dropdown with modules from the database -->
                                    @foreach ($modules as $module)
                                        <option value="{{ $module->id }}" {{ $module->id == $program->module_id ? 'selected' : '' }}>{{ $module->name }}</option>

                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Program</button>
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