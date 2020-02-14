<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use App\Review;

class FavoritesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Review $review) 
    {
        Favorite::create('favorites')->insert([
            'user_id' => auth()->id(),
            'favorited_id' => $review->id,
            'favorited_type' => get_class($review)
        ]);
    }
}
