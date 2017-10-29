<?php

namespace SeaFood\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //

    public function login(){

    	return view('Login.loginPrincipal');
    }
}
