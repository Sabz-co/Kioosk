<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use App\Review;
use App\Comment;
use App\Activity;

class FavoritesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function storeReview(Review $review) 
    {

        if($review->isFavorited()) {
            $review->dislike();
            $message = "deleted";
        } else {
            $review->favorite();
            $message = "created";
        }
        

        return response()->json(['success'=>$message]);
        
    }


    public function storeActivity(Activity $activity) 
    {

        if($activity->isFavorited()) {
            $activity->dislike();
            $message = "deleted";
        } else {
            $activity->favorite();
            $message = "created";
        }
        

        return response()->json(['success'=>$message]);
        
    }
    public function storeComment(Comment $comment) 
    {

        if($comment->isFavorited()) {
            $comment->dislike();
            $message = "deleted";
        } else {
            $comment->favorite();
            $message = "created";
        }
        

        return response()->json(['success'=>$message]);
        
    }
}
