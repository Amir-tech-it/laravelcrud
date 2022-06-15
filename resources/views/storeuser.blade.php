<h1>This is flush  Session</h1>
@if(session('user'))
<h3>Data has been saved fro {{session('user')}}</h3>
@endif
<form action="storeflash" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter Username"> </br> </br>
    <input type="password" name="password" placeholder="Enter Password"> </br> </br>
    <input type="text" name="email" placeholder="Enter Email"></br> </br>
    <button type="submit">Submit</button>
    
    </form>
