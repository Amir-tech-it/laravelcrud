<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    {{--
    {{$name ?? "vista"}}


    {!! $demo !!}

    {{$name ?? "vista"}}
@if($name != "")
      {{"Name is not empty"}}
@elseif($name == "Vista")
      {{"name is correct"}}
@else
     {{"Name is incorrect"}}
@endif
--}}







{{--
@unless ($name == "vs")
this is vs
@endunless
--}}

{{--
@isset ($name)

welcome {{$name}}

@endisset
--}}

<div>
@for($i=1;$i<=10;$i++)
@if($i==5)


@continue  
@endif
{{$i}}
@endfor
</div>










</body>
</html>