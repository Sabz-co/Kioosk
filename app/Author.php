<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  public function books()
  {
    return $this->belongsToMany('App\Book');
  }

  public function translated_books()
  {
    return $this->belongsToMany('App\Book', 'translator_book', 'translator_id', 'book_id');
  }
}