<h3>{{$title}}</h3>

<a href="{{url('/')}}">Home</a>
<a href="{{url('customer/view')}}">View</a>
<form action="{{$url}}" method="post">
    @csrf

    <!-- <pre>
        @php
        print_r($errors->all());
        @endphp
</pre> -->Name:
  <input type="text" id="name" name="name"    value="{{!empty($customer->name) ? $customer->name:''}}" /><br><br>
  Email:
  <input type="email" id="email" name="email"      value="{{!empty($customer->email) ? $customer->email:''}}" /><br><br>
  Password:
  <input type="password" id="psw" name="psw"   value="{{!empty($customer->psw) ? $customer->psw:''}}" /><br><br>
  Confirm Password:
  <input type="password" id="cnfrm_psw" name="cnfrm_psw" label="Confirm Password" value="{{!empty($customer->cnfrm_psw) ? $customer->cnfrm_psw:''}}" /><br><br>
  <input type="radio" id="male" name="gender" value="M" {{!empty($customer->gender) && $customer->gender == "M" ? "checked" :  ""}}> Male <br><br>
  <input type="radio" id="female" name="gender" value="F" {{!empty($customer->gender) && $customer->gender == "F" ? "checked" : ""}}> Female<br><br>
  <input type="radio" id="male" name="gender" value="O" {{!empty($customer->gender) && $customer->gender == "O" ? "checked" : ""}}> Other<br><br>
  
  Country:
  <input type="text" id="country" name="country"    value="{{!empty($customer->country) ? $customer->country:''}}"/><br><br>
  State:
  <input type="text" id="state" name="state"    value="{{!empty($customer->state) ? $customer->state:''}}"/><br><br>
  Address:
  <input type="text" id="address" name="address"   value="{{!empty($customer->address) ? $customer->address:''}}"/><br><br>
  Date:
  <input type="date" id="date" name="date"   value="{{!empty($customer->dob) ? $customer->dob:''}}"/> <br><br>
  <input type="submit" value="Submit">
</form> 
