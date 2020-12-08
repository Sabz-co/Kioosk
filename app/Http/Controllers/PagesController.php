<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use App\Publisher;
use App\Subscription;
use App\Activity;
use App\Author;
use App\Genre;

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
        $coreaders = null;

        if (Auth::user()) {
            $timeline = Activity::timeline(Auth::user());
            $currently_reading = User::reading(Auth::user());
            if ($currently_reading) {
                $coreaders = Book::coreaders($currently_reading->book_id);
            }
        }

        $authors = Author::inRandomOrder()->take(4)->get();

        $users = User::inRandomOrder()->where('id', '!=', Auth::user()->id)->take(4)->get();

        
        return view('home', compact('books', 'users', 'authors', 'trending', 'currently_reading', 'timeline', 'coreaders'));
    }

    public function genres(){
        $genres = Genre::all();
        $randomGenres = Genre::where('count', '>', 1)->inRandomOrder()->take(3)->get();
        $latestBooks = Book::orderBy('created_at', 'desc')->take(5)->get();
        return view('genres.index', compact('genres', 'randomGenres', 'latestBooks'));
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

    public function search($term){

        $input = '%' . $term . '%';
        
        return view('pages.search', [
            'term' => $term,
            'books' => Book::when(!empty($input) , function ($query) use($input){
                return $query->where('title', 'LIKE', $input)->take(3)->get();
                }),
            'authors' => Author::when(!empty($input) , function ($query) use($input){
                return $query->whereRaw("concat(first_name, ' ', last_name) like '{$input}' ")->take(3)->get();
                }),
            'users' => User::when(!empty($input) , function ($query) use($input){
                return $query->where("name", 'like', $input )->take(3)->get();
                }),
            'publishers' => Publisher::when(!empty($input) , function ($query) use($input){
                return $query->where("title", 'like', $input )->take(3)->get();
                }),
        ]);
    }

    public function test(){
        dd(Auth::user()->rated()); 
    }
}
