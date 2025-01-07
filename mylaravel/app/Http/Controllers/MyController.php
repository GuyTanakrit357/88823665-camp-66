<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    function myfunction($var1=" "){
        $data['value_id'] = $var1;
        return view('myview', $data);
    }
}
