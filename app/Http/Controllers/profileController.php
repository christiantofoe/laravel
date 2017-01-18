<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    //
    public function tampilkan (){
    	$u=Auth::user();
    	return view('profile')->with("data",$u);
    }
}
