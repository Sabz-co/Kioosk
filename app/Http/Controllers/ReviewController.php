<?php

namespace App\Http\Controllers;

use App\Review;
use App\Book;
use App\User;
use App\Notifications\ReviewHasBeenWritten;
use Illuminate\Http\Request;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new Review();
        $review->user_id = auth()->user()->id;
        $review->book_id = request('book_id');
        $review->body = request('body');
        $review->save();

        $user = User::findOrFail(auth()->user()->id);

        $review->owner->subscriptions->filter(function ($sub) use ($review){
            return $sub->user_id != $review->user_id;
        })->each(function ($sub) use ($review) {
            $sub->user->notify(new ReviewHasBeenWritten($review->user, $review));
        });

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
        return view('review.show', compact('review'));
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
}
