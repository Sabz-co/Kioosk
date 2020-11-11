<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $guarded = [];

    public function subject()
    {
        return $this->morphTo();
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public static function timeline($user, $take = 50)
    {
        foreach($user->subscribers as $subscriber) {
            $timeline = $subscriber->activity()->latest()->with('subject')->take($take)->get()->groupBy(function($activity) {
                return $activity->created_at->format('Y-m-d');
            });
            $user->put($timeline);
        }
        return $user;
    }

    public static function feed($user, $take = 50)
    {
        return $user->activity()->latest()->with('subject')->take($take)->get()->groupBy(function($activity) {
            return $activity->created_at->format('Y-m-d');
        });
    }
}
