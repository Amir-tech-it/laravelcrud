<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function index(){
        $url = url('customerfrm');
        $title = "Create Customer";

        $data = compact('url','title');

        return view('customerfrm')->with($data);
    }

    public function register(Request $req){

        
        // print_r($req->all());
        $customer = new Customer;
        $customer->name = $req['name'];
        $customer->email = $req['email'];
        $customer->password = $req['psw'];
        $customer->country = $req['country'];
        $customer->state = $req['state'];
        $customer->address = $req['address'];
        $customer->dob = $req['date'];
        $customer->save();
        return redirect('/customer/view');

    }

    public function view(){
        $customers = Customer::all();
        // echo "<pre>";
        // print_r($customers->toArray());
       $data =  compact('customers');
        return view('customer-view')->with($data);
    }
     
    public function delete($id){
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer/view');
        // echo"<pre>";
        // print_r($customer);
        // echo $id;
        // die;
    }

    public function edit($id){
        
        $customer = Customer::find($id);
        if(is_null($customer)){
            return redirect('customer/view');
        }
        else{
            $title = "Update Customer";
            $url = url('/customer/update') . "/" .$id;
            $data = compact('customer','url','title');
            return view('customerfrm')->with($data);
        }
      
       
    }

    public function update($id, Request $req ){
        $customer = Customer::find($id);
        $customer->name = $req['name'];
        $customer->email = $req['email'];
        $customer->country = $req['country'];
        $customer->state = $req['state'];
        $customer->address = $req['address'];
        $customer->dob = $req['date'];
        $customer->save();
        return redirect('/customer/view');
    }

}
