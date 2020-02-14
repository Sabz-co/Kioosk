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

        return $review->favorite();
        
    }
}
