<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function index()
    {
        //if you have a view inside a folder
        return view ('user.index');
    }

    function about()
    {
        //if you have a view inside a folder
        return view ('user.about');
    }

    
    function services()
    {
        //if you have a view inside a folder
        return view ('user.services');
    }

}
