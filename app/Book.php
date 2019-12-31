<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  public function authors()
  {
    return $this->belongsToMany('App\Author');
  }

  public function translators()
  {
    return $this->belongsToMany('App\Author', 'translator_book', 'book_id', 'translator_id');
  }

  public function genres()
  {
    return $this->belongsToMany('App\Genre');
  }

  public function publisher()
  {
    return $this->belongsTo('App\Publisher');
  }
}
