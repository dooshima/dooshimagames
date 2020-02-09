<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopWineController extends Controller
{
    public function index(){
        return view('pages/shopWine');

    } 

    public function cart(){
        return view('pages/cart');
    }
}
