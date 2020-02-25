<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    protected $fillable = ['book_id', 'user_id', 'shelf', 'rating'];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
