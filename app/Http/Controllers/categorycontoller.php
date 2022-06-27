<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categorycontoller extends Controller
{
    //
    function createcategory(Request $req){
        $s=new category();
        $s->category_name=$req->cat_name;
       // echo $s;
        $s->save();
        return redirect('medcategory');
    }
    function allcategories(){
        $data=category::all();
        return view('allcategories',['category'=>$data]);
    }
    function deletecategory($id)
    {
        $s=category::find($id);
       // echo $s;
        $s->delete();
        return redirect('allcategories');
    }
}
