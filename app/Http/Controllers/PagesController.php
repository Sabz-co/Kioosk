<?php

namespace App\Http\Controllers;

use App\Book;
use App\Filters\BookFilters;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(BookFilters $filters) {
        $books = Book::latest()->withCount('reviews')->filter($filters)->get();

        foreach($books as $book)
        echo $book->reviews_count;
        // var_dump($books);
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

    public function test(){
        $book = Book::findOrFail(5);
        $book->delete();

        return 'deleted';
    }
}
