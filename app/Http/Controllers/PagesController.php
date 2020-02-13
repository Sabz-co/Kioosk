<?php

namespace App\Http\Controllers;

use App\Book;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home() {
        $books = Book::take(15)->get();
        return view('home', compact('books'));
    }
    

    public function terms(){
        return view('pages.terms');
    }

    public function about(){
        return view('pages.about-us');
    }


    public function team(){
        return view('pages.team');
    }

    public function contact(){
        return view('pages.contact-us');
    }
}
