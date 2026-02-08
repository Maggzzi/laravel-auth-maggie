<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //action name (show register page)
    public function showRegister ()
    {
        return view('auth.register');
    }

    //action name (show login page)
    public function showLogin ()
    {
        return view('auth.login');
    }

    //action name (show register page)
    public function register ()
    {
        
    }

    //action name (show login page)
    public function login ()
    {
        
    }
    
}
