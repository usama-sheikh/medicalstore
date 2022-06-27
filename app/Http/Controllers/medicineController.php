<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medicine;
use App\Models\category;

class medicineController extends Controller
{
    //
    function savemedicine(Request $req){
        $s=new medicine();
        $s->Medicine_Name=$req->med_name;
        $s->Generic_Name=$req->gen_name;
        $s->Medicine_Formula=$req->med_formula;
        $s->Company=$req->company;
        $s->Price=$req->price;
        $s->Description=$req->description;
        $s->category=$req->category;
        if($req->hasfile('image')){
            $file=$req->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/medicines/',$filename);
            $s->Medicine_Image=$filename;
        }
     // echo $s;
        $s->save();
       return redirect('addmedicine');
    }

    function getMedicine(){
        $data=medicine::all();
        return view('medicines',['medicines'=>$data]);
    }


    function deletemedicine($id)
    {
        $s=medicine::find($id);
       // echo $s;
        $s->delete();
        return redirect('medicines');
    }
    function editmedicine($id)
    {
        $s=medicine::find($id);
        $c=category ::all();
       // echo $s;

        return view('editmedicine',['medicine'=>$s,'category'=>$c]);

    }
        function savemedicinedata(Request $req){
            $s=medicine::find($req->id);
            $s->Medicine_name=$req->name;
            $s->Generic_Name=$req->Gen_Name;
            $s->Medicine_Formula=$req->formula;
            $s->Company=$req->company;
            $s->Price=$req->price;
            $s->Description=$req->description;
            $s->category=$req->category;
            if($req->hasfile('image')){
                $file=$req->file('image');
                $extention=$file->getClientOriginalExtension();
                $filename=time().'.'.$extention;
                $file->move('uploads/medicines/',$filename);
                $s->Medicine_Image=$filename;
            }
           // echo $s;
            $s->save();
          return redirect('medicines');
        }


}
