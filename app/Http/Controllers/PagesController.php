<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use App\Subscription;
use App\Activity;

use App\Filters\BookFilters;
use Illuminate\Support\Facades\Redis;
use Auth;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(BookFilters $filters) {

        $books = Book::latest()->withCount('reviews')->filter($filters)->get();
        $trending = array_map('json_decode', Redis::zrevrange('trending_books', 0, 14));
        $reading = null;
        $timeline = [];

        if (Auth::user()) {
            $timeline = Activity::timeline(Auth::user());
            $currently_reading = User::reading(Auth::user());
            if ($currently_reading) {
                $coreaders = Book::coreaders($currently_reading->book_id);
            }
        }


        
        return view('home', compact('books', 'trending', 'currently_reading', 'timeline', 'coreaders'));
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

    public function search(){
        return view('pages.search');
    }

    public function test(){
        dd(Auth::user()->rated()); 
    }
}
