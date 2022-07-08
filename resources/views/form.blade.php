Form Template
<form action="{{ url('/register') }}" method="post">
    @csrf

    <!-- <pre>
        @php
        print_r($errors->all());
        @endphp
</pre> -->
  {{--<label for="name">First name:</label><br>
  <input type="text" id="name" name="name" value="{{old('name')}}"><br>--}}
  {{--<div class="all_errors">
    @error('name')
        {{ $message }}
    @enderror
  </div>--}}

 
  <x-input type="text" id="name" name="name" label="Please enter your name "/>
  <x-input type="email" id="email" name="email" label="Please enter your email "/>
  <x-input type="password" id="psw" name="psw" label="Please enter password" />
  <x-input type="password" id="cnfrm_psw" name="cnfrm_psw" label="Confirm Password" />
  <x-input type="text" id="country" name="country" label="Please enter your country "/>
  <x-input type="text" id="state" name="state" label="Please enter your State "/>
  <x-input type="text" id="address" name="address" label="Please enter your adress "/>
  <x-input type="date" id="date" name="date" label="Please enter your date "/>

  <input type="submit" value="Submit">
</form> 
