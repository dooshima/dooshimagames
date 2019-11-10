<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authenticateController extends Controller
{
    public function signup()
    {
        return view('auth/password/register');
    } 
}
