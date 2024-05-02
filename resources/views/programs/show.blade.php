<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Details</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $program->module->name }} - {{ $program->day_of_week }} - Session {{ $program->session_number }}</div>

                    <div class="card-body">
                        <p>Fillier: {{ $program->fillier->name }}</p>
                        <p>Module: {{ $program->module->name }}</p>
                        <p>Day of Week: {{ $program->day_of_week }}</p>
                        <p>Session Number: {{ $program->session_number }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>