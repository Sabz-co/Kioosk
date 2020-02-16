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


}
