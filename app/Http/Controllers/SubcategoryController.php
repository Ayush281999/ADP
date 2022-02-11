<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subcategory;

class SubcategoryController extends Controller
{
    public function creat2(){
        return view('Partial.subcategory.subcategory');
    }
    function addsubdata(Request $req)
    {
       $Subcategory = new subcategory;
       $Subcategory->category = $req->input('category');
       $Subcategory->subcategory = $req->input('subcategory');
       $Subcategory->img = $req->input('img');
       if($req->hasfile('img'))
       {
           $file = $req->file('img');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;

           $Subcategory->img = $filename;
       }

       $Subcategory->save();
       return back()->with('status','Subcategory Added Succesfully');

    }
}
