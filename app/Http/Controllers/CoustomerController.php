<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coustomer;
use Datatables;

class CoustomerController extends Controller
{
    public function index5()
    {
        return view('coustomer');
    }
    public function coustomerlist()
    {
        $coustomer = DB::table('coustomer')->select('*');
        return datatables()->of($coustomer)
            ->make(true);
    }

    function addcosdata(Request $req)
    {
       $Coustomer = new subcategory;
       $Coustomer->name = $req->input('name');
       $Coustomer->email = $req->input('email');
       $Coustomer->save();
       return redirect('datatables');

    }
    }
    
