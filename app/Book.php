<?php

namespace App;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

  use RecordsActivity, RecordsVisits;

  protected $guarded = [];

  protected $casts = [
    'thumbnail' => 'string',
  ];

  protected $appends = ['on_shelf'];



  protected static function boot()
  {
    parent::boot();

    static::deleting(function ($book) {
      $book->reviews->each->delete();
    });
  }

  public function author()
  {
    return $this->belongsTo('App\Author');
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
  
  public function reviews()
  {
    return $this->hasMany(Review::class);
  }

    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function scopeFilter($query, $filters)
    {
      return $filters->apply($query);
    }

    public function getReviewCountAttribute()
    {
        return $this;
    }

    public function path()
    {
      return '/book/' . $this->id;
    }


    public function getOnShelfAttribute()
    {
        if (Auth::guest()) {
          return false;
        }
    }


    public function getCoverAttribute()
    {
      if(empty($this->image_src)) {
        return 'images/books/placeholder.png';
      }

      return 'images/books/thumbnail/'.$this->image_src;
    }


}
