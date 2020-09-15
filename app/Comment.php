<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    use RecordsActivity;
    
    protected $guarded = [];

    /**
     * Get all of the owning commentable models.
     */
    public function commentable()
    {
        return $this->morphTo();
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


}
