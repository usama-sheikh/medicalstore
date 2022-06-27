<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nursingfacilities;

class nursingfacilityController extends Controller
{
    //
    function savenursingfacility(Request $req){
        $s=new nursingfacilities();
        $s->facility_Name=$req->fac_name;
        $s->charges=$req->charges;
        $s->Description=$req->description;
        $s->save();
        return redirect('addnursingfacilities');
    }

    function getnursingfacility(){
        $data=nursingfacilities::all();
        return view('nursingfacilities',['nursingfacilities'=>$data]);
    }

    function editnursingfacility($id)
    {
        $data=nursingfacilities::find($id);
        return view('editnursingfacility',['nursingfacilities'=>$data]);
    }

    function deletenursingfacility($id)
    {
        $s=nursingfacilities::find($id);
       // echo $s;
        $s->delete();
        return redirect('nursingfacilities');
    }
    function updatenursingfacility(Request $req){
        $s=nursingfacilities::find($req->id);
        $s->facility_Name=$req->fac_name;
        $s->charges=$req->charges;
        $s->Description=$req->description;

        //echo $s;
        $s->save();

        return redirect('nursingfacilities');
    }
}
