<?php

namespace App\Http\Controllers;

use App\Review;
use App\Book;
use App\Publisher;
use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Image;
use Slug;
use Auth;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show', 'index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publishers = Publisher::pluck('title', 'id');
        $genres = Genre::pluck('name');
        // return $publishers;
        return view('book.add', compact('publishers', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:books|max:200',
            // 'publisher_id' => 'required',
            'description' => 'required',
        ]);


        // return request()->all();

        // $book = Book::create($request->all());
            $book = new Book();

            $book->title = request('title');
            // $book->author_id = request('collector');
            $book->publisher_id = request('publisher_id');

            $book->description = request('description');
            $book->isbn = request('isbn');
            $book->publish_year = request('publishYear');
            // $book->slug = Slug::slugify($book->title);


            if (request()->has('image')) {
                $originalImage= $request->file('image');
                $thumbnailImage = Image::make($originalImage);
                $thumbnailPath = public_path().'/images/books/thumbnail/';
                $originalPath = public_path().'/images/books/extensive/';
                $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
                $thumbnailImage->resize(155,235);
                $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 
        
                $imagemodel= new Image();
                $book->thumb=time().$originalImage->getClientOriginalName();
            }
            
            $book->save();
            if ($request->has('genre')) {
                $book->tag($request->genre);
            }
        return redirect()->route('book.show', $book->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {






        // $book->untag();
        // $book->retag(['علمی تخیلی', 'رمان خارجی', 'رمان ایرانی', 'فانتزی']);
        // Redis::del('trending_books');
        Redis::zincrby('trending_books', 1, json_encode([
            'title' => $book->title,
            'image' => $book->thumb,
            'path' => $book->path()
        ]));

        // $book->recordVisit();
        // dd($book->append('on_shelf')->toArray());
        $on_list = null;
        if (auth()->user()) {
            $on_list = Review::where([['user_id', '=', auth()->user()->id], ['book_id', '=',  $book->id]])->first();
        }
        return view('book.show', compact('book', 'on_list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }

    public function storeRating(Book $book, Request $request) {
        // $book = Book::findOrFail($request->sourceId);
        
        // $book->rateOnce($request->value);
        $rate = Review::updateOrCreate(
            ['user_id' => Auth::user()->id,
            'book_id' => $book->id],
            ['rating' => $request->value]);
        return response()->json($rate);
    }
}
