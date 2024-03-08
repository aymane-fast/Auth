
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

        <input type="submit" value="login ">
        
    </form>
</html>