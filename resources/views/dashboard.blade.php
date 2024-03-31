<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>Welcom {{ $name = Auth::user()->name }}</h3>

    @if (Auth::user()->role === 'user')

        @php
            $status = Auth::user()->accepted;
        @endphp


        @if ($status === 'refuse')
            <h1>votre dossier et refuser , contacter l'administration </h1>
        @endif

        @if ($status === 'attent')
            <h1>votre dossier et cours de traitement</h1>
        @endif

        @if ($status === 'accepted')
            <h1>you are accepted</h1>
            <a href="{{ url('/grades') }}">Show Grades</a>
        @endif
    @endif
    @if (Auth::user()->role === 'admin')
        <h1>you are an admin</h1>
        <a href="{{ url('/filliers') }}">Show Filliers</a><br>
        <a href="{{ url('/modules') }}">Show Modules</a><br>
        <a href="{{ url('/listUsers') }}">Show Students status</a><br>
        <a href="{{ url('/grades/add') }}">Show Grades</a><br>
        <a href="{{ url('/logout') }}">Logout</a>
    @endif
</body>

</html>
