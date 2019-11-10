<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\User;

class joinUsController extends Controller
{
    // public function index()
    // {
    //     return view("welcome");
    // }

   
    public function create()
    {
        return view('pages/sign');
    }

 
    public function store()
    {

       // return  $request->all();  

        //validate the form 
        $this->validate(request(),[
          'email' => 'required|email',
          'password' => 'required'
        ]);

        //create and save a user

        $user = User::create(request(['email','password']));

        //sign them in

        auth()->login($user);

        //redirect to the home page

        return redirect('/');

    }

 
    public function show()
    {
        return view('pages/login');    
    }

   
}
