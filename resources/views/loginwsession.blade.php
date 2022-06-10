<h1>login with session.</h1>

<form action="lgws" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter Username">
    <input type="password" name="pass" id="pass" placeholder="Enter Passowrd">
    <button type="submit">Login</button>

</form>