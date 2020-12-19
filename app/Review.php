<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    use RecordsActivity;

    protected static function boot()
    {
      parent::boot();
  
      static::deleting(function ($review) {
        $review->comments->each->delete();
      });
    }

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

    public function shelf()
    {
        return $this->hasOne(Shelf::class);
    }

    public function path()
    {
      return '/review/' . $this->id;
    }

    public function getExcerptAttribute($startPos=0, $maxLength=150) {
      if(strlen($this->body) > $maxLength) {
          $excerpt   = substr($this->body, $startPos, $maxLength-3);
          $lastSpace = strrpos($excerpt, ' ');
          $excerpt   = substr($excerpt, 0, $lastSpace);
          $excerpt  .= '...';
      } else {
          $excerpt = $this->body;
      }
      
      return Strip_tags($excerpt);
  }

  function getPercentAttribute()
{

  $total = $this->book->page_count;
  $number = $this->progress;
  if ( $total > 0) {
   return round($number / ($total / 100),0);
  } else {
    return 0;
  }
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


    public function dislike()
    {
      $attributes = ['user_id' => auth()->id()];
      if( $this->favorites()->where($attributes)->exists()){
        return $this->favorites()->delete($attributes);
      }
    }


    public function isFavorited(){
      return $this->favorites()->where('user_id', auth()->id())->exists();
    }




    public static function feed($user, $take = 50)
    {
        return $user->reviews()->with('book')->latest()->take($take)->get();
    }

    public function getShelfTitleAttribute()
    {
        switch ($this->shelf) {
            case 'reading':
                return 'در حال خواندن';
                break;
            case 'read':
                return 'خوانده شده';
                break;
            case 'to_read':
                return 'برای خواندن';
                break;
            default:
                return;
                break;
        }
    }



}
