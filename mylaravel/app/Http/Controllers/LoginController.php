<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function index()
    {
        return view('login');

    }

    function login(Request $req){
        //echo "<pre>";
        //print_r($req->email);
        //print_r($req->password);
        //echo "</pre>";
        $user = User::where('email', $req->email)->get();
        if
        (Hash::check($req->password, $user ->password)){

        }else{
            return redirect('/login')->with('error','Invalid Credentials');
        }
        //return redirect('/');
    }
}

