<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/loginAction" method="post">
        @csrf
        <h1>login here man</h1><br>
        your Email : <br>
        <input type="text" name="email" id=""><br>
        your password :<br>
        <input type="password" name="password" id=""><br>
        <input type="submit" value="Login !">
    </form>
</body>
</html>