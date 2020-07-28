<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    public static function feed($user, $take = 50)
    {
        return $user->shelves()->with('book')->latest()->take($take)->get();
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
