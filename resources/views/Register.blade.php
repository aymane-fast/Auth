
<html>

<form action="/RegisterAction" method="POST">
    @csrf
    name: <br>
    <input type="text" name="name" ><br><br>
    email: <br>
    <input type="text" name="email" ><br><br>
    cin: <br>
    <input type="text" name="cin" ><br><br>
    password: <br>
    <input type="password" name="password" ><br><br>
    fillier: <br>
    <select name="fillier_id">
        @foreach ($filliers as $fillier)
            <option value="{{ $fillier->id }}">{{ $fillier->name }}</option>
        @endforeach
    </select><br><br>
    <input type="submit" value="Register">
</form>
</html>