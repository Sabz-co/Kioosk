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
        $timeline = array();

        $books = Book::latest()->withCount('reviews')->filter($filters)->get();
        $trending = array_map('json_decode', Redis::zrevrange('trending_books', 0, 14));
        $currently_reading = null;

        if (Auth::user()) {
            $currently_reading = auth()->user()->reading_list()->whereHas('book', function($q){
                $q->where('page_count', '>' , 0);
             })->first();
             $timeline = Activity::timeline(Auth::user());
             dd($timeline);
        }

        // return $timeline;

        return view('home', compact('books', 'trending', 'currently_reading', 'timeline'));
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
