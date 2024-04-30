<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

        <h3>Welcome {{ $name = Auth::user()->name }}</h3>
        <h1>{{ $message }}</h1>
    
        @if (Auth::user()->accepted === 'accepted')
            <a href="{{ url('/grades') }}">Show Grades</a>
        @endif

</body>

</html>
