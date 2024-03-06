<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>dashboard</h1>
    {{-- greeting the user with his name  --}}
    
        <h3>Welcom to your dashboard {{ $name = Auth::user()->name }}</h3>
    {{-- checking the user role to render link to users list --}}
    @if (Auth::check())
        @if (Auth::user()->role === 'admin')
            <a href="/listUsers">la list des users</a>
        @endif
    @endif


</body>

</html>
