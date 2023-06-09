<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Base_Controller extends Controller
{
    public function home(){
        return view('home');

    }

    public function services(){
        return view("services");
    }

    public function company(){
        return view('company');
    }
    public function contact_us(){
        return view("contact"); 
    }
}
