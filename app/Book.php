<?php

namespace App;
use Auth;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use willvincent\Rateable\Rateable;

class Book extends Model
{

  use RecordsActivity, RecordsVisits, Sluggable, Rateable;

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

  // public function author()
  // {
  //   return $this->belongsTo('App\Author');
  // }


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
  
  public function reviews()
  {
    return $this->hasMany(Review::class);
  }

  public function fullReviews()
  {
    if(Auth::user()) {
      return $this->hasMany(Review::class)->whereNotNull('body')->where('body', '!=', '')->where('user_id', '!=', Auth::user()->id);
    }
    return $this->hasMany(Review::class)->whereNotNull('body')->where('body', '!=', '');
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
      return '/book/' . $this->slug;
    }


    public function getOnShelfAttribute()
    {
        if (Auth::guest()) {
          return false;
        }
    }


    public function getCoverAttribute()
    {
      if(empty($this->thumb)) {
        return 'images/books/placeholder.png';
      }

      return 'images/books/thumbnail/'.$this->thumb;
    }


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    /**
 * Get the route key for the model.
 *
 * @return string
 */
public function getRouteKeyName()
{
    return 'slug';
}


}
