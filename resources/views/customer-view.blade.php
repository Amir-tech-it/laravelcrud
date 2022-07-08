<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

<a href="{{url('/')}}">Home</a>
<a href="{{url('/customerfrm')}}">Register</a>
<a href="{{route('registerform')}}">Register1</a>

<h1>Table Data</h1>


<table id="customers">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Address</th>
    <th>State</th>
    <th>Country</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
  @foreach ($customers as $customer)
  <tr>
   
    <td>{{$customer->name}}</td>
    <td>{{$customer->email}}</td>
    <td>
      @if($customer->gender == "M")
      Male
      @elseif($customer->gender == "F")
      Female
      @else
      Other
      @endif

    </td>
    <td>{{$customer->address}}</td>
    <td>{{$customer->state}}</td>
    <td>{{$customer->country}}</td>
    <td> 
      @if($customer->status == "1")
      Active
    @else
    Inactive
      @endif
     
    </td>
    <td>
      <a href="{{route('deletecustomer',['id' => $customer->id])}}">Delete</a>
      <!-- <a href="{{url('customer/delete/')}}/{{$customer->id}}">Delete</a> &nbsp &nbsp -->
      <a href="{{route('customeredit',['id' => $customer->id])}}">Edit</a>
</td>
  </tr>
 
  @endforeach
</table>
