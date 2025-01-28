<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        function index()    {
            $users = User::all();
            return view('user', ['users' => $users]);
        }
        function edit($id){
            $user = User::find($id);
            return view('user_edit', ['user' => $user]);
        }

        function edit_action(Request $req){
            $user = User::find($req->id);

            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = $req->password;

            $user->save();
        }

        function delete($id){
            $user = User::find($id);
            $user->delete();
            return redirect('/users');
        }
    }
}
