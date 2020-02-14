<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Comment $comment) 
    {
        return DB::table('favorites')->insert([
            'user_id' => auth()->id(),
            'favorited_id' => $comment->id,
            'favorited_type' => get_class($comment)
        ]);
    }
}
