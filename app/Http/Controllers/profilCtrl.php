<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nike;
class profilCtrl extends Controller
{
    
    public function show(){
        $db=nike::all();
        return view ('nike',compact('db'));
    }
}
