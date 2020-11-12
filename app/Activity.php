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
        $result = collect();
        foreach($user->subscribers as $key => $subscriber) {
                $result[$key] = collect($subscriber->activity()->latest()->with('subject')->take($take)->get()->groupBy(function($activity) {
                    return $activity->created_at->format('Y-m-d');
                }));
                $result = $result->merge($result[$key]);
        }
        dd($result);
        return $result;
    }

    public static function feed($user, $take = 50)
    {
        return $user->activity()->latest()->with('subject')->take($take)->get()->groupBy(function($activity) {
            return $activity->created_at->format('Y-m-d');
        });
    }
}
