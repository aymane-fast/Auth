<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Fillier</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @if ($user->role === 'user')
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->accepted }}</td>
                            <td>{{ $user->fillier->name }}</td>
                            <td>
                                <a href="delete/{{$user->id}}" class="btn btn-danger">Delete</a>
                            </td>
                            <td>
                                <a href="Accept/{{$user->id}}" class="btn btn-success">Accept</a>
                            </td>
                            <td>
                                <a href="Refuse/{{$user->id}}" class="btn btn-warning">Refuse</a>
                            </td>
                            <td>
                                <a href="Attent/{{$user->id}}" class="btn btn-info">Attent</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <div class="mb-3">
            <a href="/dashboard" class="btn btn-primary">Dashboard</a>
            <a href="/logout" class="btn btn-secondary">Logout</a>
        </div>
    </div>
    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>