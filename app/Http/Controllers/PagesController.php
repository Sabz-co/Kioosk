<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

    public function terms(){
        return view('pages.terms');
    }

    public function about(){
        return view('pages.about-us');
    }


    public function team(){
        return view('pages.team');
    }
}
