<?php

namespace App\Http\Controllers;

use App\Review;
use App\Book;
use App\User;
use App\Notifications\ReviewHasBeenWritten;
use Illuminate\Http\Request;
use Auth;

class ReviewController extends Controller
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
    public function create(Book $book)
    {
        return view('review.add', compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $data = $this->form_validation($request);

        $request->validate([
            'book_id' => ['exists:books,id', 'required'],
            'shelf' => ['in:read,to_read,reading', 'nullable'],
            'rating' => ['numeric', 'nullable'],
            'progress' => ['numeric', 'nullable'],
            'body' => ['nullable']
        ]);

        // if(empty($data['rating']) ){
        //     $data['rating'] = null;
        // }

        // if(empty($data['body']) ){
        //     $data['body'] = null;
        // }
        
        $review = Review::updateOrCreate(['book_id' => $request->book_id, 'user_id' => 1],
    ['body' => $request->body, 'rating' => $request->rating ]);
        // $item->shelf = $data['shelf'];
        // $item->update();


        // $review = new Review();
        // $review->user_id = auth()->user()->id;
        // $review->book_id = request('book_id');
        // $review->body = request('body');
        // $review->save();

        // $user = User::findOrFail(auth()->user()->id);

        // $review->owner->subscriptions->filter(function ($sub) use ($review){
        //     return $sub->user_id != $review->user_id;
        // })->each(function ($sub) use ($review) {
        //     $sub->user->notify(new ReviewHasBeenWritten(auth()->user(), $review));
        // });



        return redirect()->back()->with('flash', 'نقد شما به درستی در سیستم ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        $page_class = "review";
        return view('review.show', compact('review', 'page_class'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }

    public function storeLikes(Review $review, Request $request) {
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }



        // Thanks to Mikey for this clean validation
        private function form_validation(Request $request)
        {
            return $request->validate([
                'book_id' => ['exists:books,id', 'required'],
                'shelf' => ['in:read,to_read,reading', 'sometimes|required'],
                'rating' => ['numeric', 'nullable'],
                'progress' => ['numeric', 'nullable'],
                'body' => ['nullable']
            ]);
        }



}
