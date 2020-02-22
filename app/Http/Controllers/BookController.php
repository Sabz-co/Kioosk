<?php

namespace App\Http\Controllers;

use App\Book;
use App\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Image;
use Slug;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publishers = Publisher::pluck('title', 'id');
        // return $publishers;
        return view('book.add', compact('publishers'));
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
            $book->author_id = request('collector');
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
                $book->image_src=time().$originalImage->getClientOriginalName();
            }
            //Temporary
            $book->slug = $book->title;
            $book->save();
            
        return redirect()->route('book.show', $book->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        // Redis::zincrby('trending_books', 1, json_encode([
        //     'title' => $book->title,
        //     'image' => $book->image_src,
        //     'path' => $book->path()
        // ]));

        // $book->recordVisit();

        return view('book.show', compact('book'));
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
}
