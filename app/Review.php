<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    // protected $appends = ['favoritesCount', 'isFavorited', 'modelName', 'isSubscribedTo', 'ownerName', 'replies'];


    public function owner()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function book()
    {
      return $this->belongsTo(Book::class, 'book_id');
    }


    public function replies()
    {
      return $this->hasMany(Reply::class);
    }

    /**
     * Get all of the review's comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function favorites()
    {
      return $this->morphMany(Favorite::class, 'favorited');
    }

    public function favorite()
    {
      $attributes = ['user_id' => auth()->id()];
      if(! $this->favorites()->where($attributes)->exists()){
        return $this->favorites()->create($attributes);
      }
    }

    public function isFavorited(){
      return $this->favorites()->where('user_id', auth()->id())->exists();
    }
}
