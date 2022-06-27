<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\orderdetail;

class orderController extends Controller
{



    //
    function getorder(){
        $data=order::all();
        return view('orders',['orders'=>$data]);
    }
    function getsales(){
        $completeddata=order::where('status', '=', 'Completed')->get();
        return view('sales',['orders'=>$completeddata]);


    }

    function deleteorder($id)
    {
        $s=order::find($id);
       // echo $s;
        $s->delete();
        return redirect('orders');
    }
    function approverecord(Request $req){
        $s=order::find($req->id);
   //     $s->status=$req->status;
       // $o=$req->status;
        if ($req->status='Pending') {
            $s->status=$req->status;
        }

        $s->save();
       // echo $s;
        return redirect('orders');
    }
    function declinerecord(Request $req){
        $s=order::find($req->id);

        if ($req->status='Declined') {
            $s->status=$req->status;
        }

        $s->save();
       // echo $s;
        return redirect('orders');
    }
    function editorder($id)
    {
        $data=order::find($id);
        return view('editorder',['order'=>$data]);
    }
    function vieworder($id )
    {
        $data=order::find($id);
      //  $dataa=select * from 'orderdetail' where 'orderdetail'.'id' = $id;
      $s=orderdetail::where('order_id', '=', $id)->get();
     // $a=$s->{['Medicine_Name'] };

     //echo $s;

     /* $stuff = array('order' => $s);
    foreach ($stuff as $key => $value) {
     echo "$key: $value\n";
     } */
     $total=0;
       return view('vieworder',['order'=>$data ,'orderdd'=>$s ,'total'=>$total]);

    }

    function updateorder(Request $req){
        $s=order::find($req->id);
        $s->customer_name=$req->name;
        $s->phone_no=$req->phone_no;
        $s->status=$req->status;
        $s->payment_method=$req->payment_method;
        //echo $s;
        $s->save();
       return redirect('orders');
    }
}
