<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function create1(){
        return view('Partial.Category.category');
    }
    
    function adddata(Request $req)
    {
        $category =$req->validate([
            'category' =>'required|max:255'
        ]);
       $category=new category;
       $category->category=$req->category;
       $category->save();
       return back();
    }
    function getdata(){
        return response()->json(['First_Name' => 'Ayush','Last_Name' => 'Kumar','Email' => 'ayush281999@gmail.com','Phone_Number' => '9430273453']);
    }
}