<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about(){
        return view('front.about');
    }

    public function gallery(){
        return view('front.gallery');
    }

    public function package(){
        return view('front.package');
    }
}
