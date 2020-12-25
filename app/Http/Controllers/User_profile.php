<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class User_profile extends Controller
{
    function register(Request $req)
    {

        $req->validate([
            'username' => 'required|string|min:3',
            'email'  => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);


        $user = new User;
        $user->username = $req->input('username');
        $user->email = $req->input('email');
        $user->password = Crypt::encrypt($req->input('password'));
        $user->save();
        return redirect('login');
    }

    function login(Request $req)
    {
        $req->validate([
            'email'  => 'required|email',
            'password' => 'required|min:8'
        ]);


        $user = User::where("email", $req->input('email'))->get();
        $new_pas = Crypt::decrypt($user[0]->password) == $req->input('password');



        if (Crypt::decrypt($user[0]->password) == $req->input('password')) {

            return redirect('home');
        }
    }
}
