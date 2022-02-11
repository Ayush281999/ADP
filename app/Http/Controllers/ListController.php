<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class ListController extends Controller
{
    function list(){
        $data=category::all();
        return view('list',['categories'=>$data]);
    }
    function delete($id){
        $data = category::find($id);
        $data->delete();
        return back();
    }
    function showdata()
    {
        return category::find($id);
    }
}
