<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giveaway extends Model
{
    public function participants()
    {
        return $this->belongsToMany(User::class);
    }


    public function participateUser($userId = null)
    {
        $this->participants()->create([
            'user_id' => $userId ?: auth()->id()
        ]);
    }


    public function unparticipateUser($userId = null)
    {
        $this->participants()->where('user_id', $userId ?: auth()->id())->delete();
    }



    public function getIsParticipatededInAttribute()
    {
        return $this->participants()->where('user_id', auth()->id())->exists();
    }

    public function owner()
    {
      return $this->belongsTo(User::class, 'owner_id');
    }

    public function book()
    {
      return $this->belongsTo(Book::class, 'book_id');
    }
}
