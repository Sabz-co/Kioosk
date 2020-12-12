<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use App\Publisher;
use App\Subscription;
use App\Activity;
use App\Author;
use App\Genre;
use App\Review;

use App\Filters\BookFilters;
use Illuminate\Support\Facades\Redis;
use Auth;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(BookFilters $filters) {

        $books = Book::latest()->withCount('reviews')->filter($filters)->get();
        $trending = array_map('json_decode', Redis::zrevrange('trending_books', 0, 14));
        $coreaders = null;

        $authors = Author::inRandomOrder()->take(4)->get();

        $users = User::inRandomOrder()->when(Auth::user(), function ($query) {
            $query->where('id', '!=', Auth::user()->id);
        })->take(4)->get();

        $timeline = Activity::when(Auth::user(), function () {
            return Activity::timeline(Auth::user());
        });

        $currently_reading = Review::inRandomOrder()->when(Auth::user(), function (){
            return User::reading(Auth::user());
        });
        if (!empty($currently_reading->book)) {
            $coreaders = Book::coreaders($currently_reading->book_id);   
        }


        
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

    public function search(Request $request){

        $term = $request->term;

        $input = '%' . $request->term . '%';

        $books = Book::when(!empty($request->term) , function ($query) use($input){
            return $query->where('title', 'LIKE', $input)->take(35)->get();
            });
        $authors = Author::when(!empty($request->term) , function ($query) use($input){
            return $query->whereRaw("concat(first_name, ' ', last_name) like '{$input}' ")->take(35)->get();
            });
        $users = User::when(!empty($request->term) , function ($query) use($input){
            return $query->where("name", 'like', $input )->take(35)->get();
            });
        $publishers = Publisher::when(!empty($request->term) , function ($query) use($input){
            return $query->where("title", 'like', $input )->take(35)->get();
            });
        $tags = $books->map(function($book, $key) {
            return $book->existingTags();
       });
       
        return view('pages.search', compact('books', 'term', 'tags', 'authors', 'users', 'publishers'));
    }

    public function test(){
        dd(Auth::user()->rated()); 
    }
}
