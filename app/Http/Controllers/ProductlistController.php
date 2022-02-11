<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductlistController extends Controller
{
    function productlist(){
        $data=product::all();
        return view('Partial.product.productlist',['product'=>$data]);
    }
    function delete($id){
        $data = product::find($id);
        $data->delete();
        return back();
    }
}
