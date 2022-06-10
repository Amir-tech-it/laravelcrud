<h1>Request data is here.</h1>

<form action="sbmt" method="POST">
    @csrf
    {{method_field('PUT')}}
    <input type="text" name="user" placeholder="Enter Username">
    <input type="password" name="pass" id="pass" placeholder="Enter Passowrd">
    <button>Login</button>

</form>