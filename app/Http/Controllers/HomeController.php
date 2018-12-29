<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function company()
    {
        return view('company');
    }
    public function contact()
    {
        return view('contact-us');
    }
    public function home(){
        return view("home");
    }
    public function service(){
        return view('our-service');
    }
}
