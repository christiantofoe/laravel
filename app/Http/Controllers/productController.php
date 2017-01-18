<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\product;
class productController extends Controller
{
    //
    public function tampilkan(){
    	$table= DB::table('nike')->get();
    	return view('product')->with("data",$table);
    }
}
