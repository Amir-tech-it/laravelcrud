
@include('header')
<h1>This is users page</h1>


{{--  
 @if($user=="ali")
<h4>hy {{$user}}</h4>
@endif 


 @for($i=0;$i<=10;$i++)
<h4>{{$i}}</h4>
@endfor 
--}}

@foreach($users as $user)
<h5>{{$user}}</h5>
@endforeach

@include('hello')


<script>
    var data = @json($users);
    console.warn(data[0]);
    </script>