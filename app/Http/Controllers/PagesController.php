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

        if (Auth::user()) {
            $reading = User::reading(Auth::user());
             $timeline = Activity::timeline(Auth::user());
        }

        // dd($reading);

        return view('home', compact('books', 'trending', 'reading', 'timeline'));
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
        dd(Auth::user()->rated()); 
    }
}
