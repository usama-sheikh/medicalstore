<?php

namespace App\Http\Controllers;
use App\Models\admin;
use App\Models\order;
use App\Models\customer;
use App\Models\medicine;
use App\Models\nursingfacilities;
use App\Models\orderdetail;
use App\Models\user;



use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class dummyapi extends Controller
{
    //
    function getorderdata()
    {
        $data=order::all();
        echo $data;
    }
    function getadmindata()
    {
        $data=admin::all();
        echo $data;
    }
    function getcustomerdata()
    {
        $data=customer::all();
        echo $data;
    }
    function getmedicinedata()
    {
        $data=medicine::all();
        echo $data;
    }

    function getnursingfacilitiesdata()
    {
        $data=nursingfacilities::all();
        echo $data;
    }
    function getorderdetaildata()
    {
        $data=orderdetail::all();
        echo $data;
    }
    function getuserdata()
    {
        $data=user::all();
        echo $data;
    }

}
