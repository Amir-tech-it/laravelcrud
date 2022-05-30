{{--
@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
--}}

<!-- {{$errors}} -->



<form action="users" method="POST">
    @csrf
    <input type="text" name="email" class="email"><br>
    @error('email'){{$message}}@enderror</br>
    <input type="password" name="pass" class="pass"><br>

    @error('pass'){{$message}}@enderror</br>
    <input type="submit" value="submit">
</form>