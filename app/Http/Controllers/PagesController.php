<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use App\Filters\BookFilters;
use Illuminate\Support\Facades\Redis;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(BookFilters $filters) {
        $books = Book::latest()->withCount('reviews')->filter($filters)->get();
        $trending = array_map('json_decode', Redis::zrevrange('trending_books', 0, 14));


        return view('home', compact('books', 'trending'));
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
        $user = User::first()->experience->awardExperience(900);
        var_dump($user);
    }
}
