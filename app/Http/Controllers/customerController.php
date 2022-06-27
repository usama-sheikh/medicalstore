<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customerController extends Controller
{
    //
    function getcustomer(){
        $data=customer::all();
        return view('customers',['customers'=>$data]);
    }

    function deletecustomer($id)
    {
        $s=customer::find($id);
       // echo $s;
        $s->delete();
        return redirect('customers');
    }
    function editcustomer($id)
    {
        $s=customer::find($id);
       // echo $s;

        return view('editcustomer',['customer'=>$s]);
    }
        function savecustomerdata(Request $req){
            $s=customer::find($req->id);
            $s->Customer_name=$req->name;
            $s->address=$req->address;
            $s->city=$req->city;
            $s->mobile=$req->mobile;
            $s->email=$req->email;
            //echo $s;
            $s->save();
           return redirect('customers');
        }
}
