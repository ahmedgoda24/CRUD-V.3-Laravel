<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Namescontroller extends Controller
{
    //
    public function names($name,$age)
    {
        return view('names.name',compact('name','age'));
    }
}
