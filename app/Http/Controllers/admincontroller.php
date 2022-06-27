<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\order;
use App\Models\category;
use App\Models\orderdetail;
use Illuminate\Support\Facades\DB;

class admincontroller extends Controller
{
    //
    function logintest(Request $req){

        $email=$req->admin_email;
        $password=$req->admin_password;
        //echo $password;

        $req->session()->put('admin_email',$email);
        //echo session('admin_email');
        $dataa=order::all();
        $records=count($dataa);
        $completeddata=order::where('status', '=', 'completed')->get();
        $remaindata=order::where('status', '=', 'pending')->get();
        $completed=count($completeddata);
        $remain=count($remaindata);

        $data=admin::where('admin_email', '=', $req->admin_email)->get();
       // $data=admin::find($req->admin_email);
        //echo $data;
        $db_data=$data[0];
        //echo $db_data;
        $db_name=$db_data->admin_name;
        $req->session()->put('name',$db_name);
        $req->session()->put('completed',$completed);
        $req->session()->put('remainingrecords',$remain);
        $req->session()->put('records',$records);
        $db_pass=$db_data->admin_password;
        $db_mail=$db_data->admin_email;
        //echo $db_mail;
        //echo $db_pass;
      //  $dataa=admin::all();
       // $records=count($dataa);
        //$req->session()->put('records',$records);

        if($email==$db_mail && $password==$db_pass){
            return redirect('dashboard');
        }
        else{
            return redirect('admin');
        }
    }

    function dashboard(){
        if(session()->has('admin_email')){
            return view('dashboard');
        }else{
            return redirect('admin');
        }
    }
    function customers(){
        if(session()->has('admin_email')){
            return view('customers');
        }else{
            return redirect('admin');
        }

    }
    function medicines(){
        if(session()->has('admin_email')){
            return view('medicines');
        }else{
            return redirect('admin');
        }
    }
    function orders(){
        if(session()->has('admin_email')){
            return view('orders');
        }else{
            return redirect('admin');
        }
    }
    function sales(){
        if(session()->has('admin_email')){
            return view('sales');
        }else{
            return redirect('admin');
        }
    }
    function nursingfacilities(){
        if(session()->has('admin_email')){
            return view('nursingfacilities');
        }else{
            return redirect('admin');
        }
    }
    function addmedicine(){
        if(session()->has('admin_email')){
            $data=category::all();
            return view('addmedicine',['category'=>$data]);
        }else{
            return redirect('admin');
        }
    }
    function addnursingfacilities(){
        if(session()->has('admin_email')){
            return view('addnursingfacilities');
        }else{
            return redirect('admin');
        }
    }
    function purchasereport(){
        if(session()->has('admin_email')){
            return view('purchasereport');
        }else{
            return redirect('admin');
        }
    }
    function salesreport(){
        if(session()->has('admin_email')){
            $data=order::where('status', '=', 'completed')->get();

            return view('salesreport',['orderdetail'=>$data]);
        }else{
            return redirect('admin');
        }
    }
     function medcategory(){
        if(session()->has('admin_email')){
            return view('medcategory');
        }else{
            return redirect('admin');
        }
    }
    function viewprescription($id){
        if(session()->has('admin_email')){
            $data=order::find($id);
          //  echo $data;
           // $id=$data->id;
             return view('viewprescription',['orders'=>$data,'id'=>$id]);
        }else{
            return redirect('admin');
        }
    }

}
