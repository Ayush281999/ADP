<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subcategory;
class SublistController extends Controller
{
    function sublist(){
        $data=subcategory::all();
        return view('Partial.subcategory.sublist',['subcategory'=>$data]);
    }
    function delete($id){
        $data = subcategory::find($id);
        $data->delete();
        return back();
    }
}