<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RegisterController extends Controller
{

    //
    function index(){
        return view('register');
    }

    function create(Request $req){
       // $obj_user = new User();
       // $obj_user -> name = $req -> input('name');
       // $obj_user -> email = $req -> email;
       // $obj_user -> password = $req -> password;
       // $obj_user -> save();


        User::create([
            'name' => $req -> input('name'),
            'email' => $req -> email,
            'password' => $req -> password,  //ใช้ bcrypt เพื่อ hash password ก่อนบันท��กลง��านข้อมูล
        ]);
        return redirect('/users');  //หลังบันท��กข้อมูลเสร็จสิ้น จะไปหน้า login

    }

}
