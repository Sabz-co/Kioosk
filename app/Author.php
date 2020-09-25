<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

  protected $appends = ['full_name'];

  public function getRouteKeyName()
  {
    return 'slug';
  }


  public function books()
  {
    return $this->belongsToMany('App\Book');
  }

  public function translated_books()
  {
    return $this->belongsToMany('App\Book', 'translator_book', 'translator_id', 'book_id');
  }

  public function getFullNameAttribute()
  {
     return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
  }
}
