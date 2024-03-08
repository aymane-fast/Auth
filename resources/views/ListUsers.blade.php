<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <table border="1" >
        @foreach ($users as $user)
            @if ($user->role === 'user')
                <tr >
                    <td style="padding:10px">
                        {{ $user->name }}
                    </td>
                    <td style="padding:10px">
                        {{ $user->email }}
                    </td>
                    <td style="padding:10px">
                        <a href="delete/{{$user->id}}">delete</a>
                    </td>
                    <td>
                        <a href="Accept/{{$user->id}}">accept</a>
                    </td>
                    </td>
                    <td>
                        <a href="Refuse/{{$user->id}}">refuse</a>
                    </td>
                    <td>
                        <a href="Attent/{{$user->id}}">Attent</a>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>
    <br>
    <button><a href="/dashboard">back to dashboard</a></button>
</body>

</html>
