<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h3>Welcome {{ $name = Auth::user()->name }}</h3>

        @if (Auth::user()->role === 'user')

            @php
                $status = Auth::user()->accepted;
            @endphp


            @if ($status === 'refuse')
                <div class="alert alert-danger" role="alert">
                    Votre dossier est refusé. Veuillez contacter l'administration.
                </div>
            @endif

            @if ($status === 'attent')
                <div class="alert alert-warning" role="alert">
                    Votre dossier est en cours de traitement.
                </div>
            @endif

            @if ($status === 'accepted')
                <div class="alert alert-success" role="alert">
                    You are accepted. <a href="{{ url('/grades') }}" class="alert-link">Show Grades</a>
                </div>
            @endif
        @endif
        @if (Auth::user()->role === 'admin')
            <div class="alert alert-primary" role="alert">
                You are an admin.
            </div>
            <a href="{{ url('/filliers') }}" class="btn btn-primary mb-2">Show Filliers</a><br>
            <a href="{{ url('/modules/add') }}" class="btn btn-primary  mb-2">Add Modules</a><br>
            <a href="{{ url('/listUsers') }}" class="btn btn-primary mb-2">Students status</a><br>
            <a href="{{ route('grades.select') }}" class="btn btn-primary mb-2">Show Grades</a><br>
            <a href="{{ url('/logout') }}" class="btn btn-danger mb-2">Logout</a>
        @endif
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
