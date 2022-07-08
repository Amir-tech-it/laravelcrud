<h3>{{$title}}</h3>

<a href="{{url('/')}}">Home</a>
<a href="{{url('customer/view')}}">View</a>
<form action="{{$url}}" method="post">
    @csrf

    <!-- <pre>
        @php
        print_r($errors->all());
        @endphp
</pre> -->



  <x-input type="text" id="name" name="name" label="Please enter your name" value="{{$customer->name}}" />
  <x-input type="email" id="email" name="email" label="Please enter your email "  value="{{$customer->email}}" />
  <x-input type="password" id="psw" name="psw" label="Please enter password" value="{{$customer->password}}" />

  <x-input type="password" id="cnfrm_psw" name="cnfrm_psw" label="Confirm Password" value="{{$customer->name}}" />
 
  <x-input type="radio" id="radio" name="gender" label="Male"  value="M"   />
  
  <x-input type="radio" id="radio" name="gender"  label="Female" checked='true' value="F"  />

  <x-input type="radio" id="radio" name="gender"  label="Other"  checked='false' value="O"   />
  
  <x-input type="text" id="country" name="country" label="Please enter your country " value="{{$customer->country}}"/>
  <x-input type="text" id="state" name="state" label="Please enter your State " value="{{$customer->state}}"/>
  <x-input type="text" id="address" name="address" label="Please enter your adress " value="{{$customer->address}}"/>
  <x-input type="date" id="date" name="date" label="Please enter your date " value="{{$customer->dob}}"/>

  <input type="submit" value="Submit">
</form> 
