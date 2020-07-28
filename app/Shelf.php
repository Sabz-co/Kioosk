<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
    public static function feed($user, $take = 50)
    {
        return $user->shelves()->with('book')->latest()->take($take)->get();
    }
}
