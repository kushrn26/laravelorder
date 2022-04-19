<form action="users" method="POST">
    @csrf
    <input type="text" name="username"><br><br>
    <input type="text" name="password"><br><br>
    <button type="submit">Login</button>
</form>