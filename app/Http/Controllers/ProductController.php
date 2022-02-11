<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function creat3(){
        return view('Partial.product.product');
    }
    function addproduct(Request $req)
    {
       $Product = new product;
       $Product->category = $req->input('category');
       $Product->subcategory = $req->input('subcategory');
       $Product->Name_of_the_Product = $req->input('Name_of_the_Product');
       $Product->Product_Price = $req->input('Product_Price');
       $Product->Product_Color = $req->input('Product_Color');
       $Product->Available_Stock = $req->input('Available_Stock');
       $Product->Product_img = $req->input('Product_img');
       $Product->Product_Description = $req->input('Product_Description');
       if($req->hasfile('Product_img'))
       {
           $file = $req->file('Product_img');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;

           $Product->Product_img = $filename;
       }

       $Product->save();
       return back()->with('status','Product Added Succesfully');

    }
}
