<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giveaway extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
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
