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
        $messagesArray = [];
        foreach($user->subscribers as $key => $subscriber) {
            $modifiedData = $subscriber->activity()->latest()->with('subject')->take($take)->get()->groupBy(function($activity) {
                return $activity->created_at->format('Y-m-d');
            });
            $messagesArray[] = $modifiedData;
        }
        // dd($timeline);
        // $timeline = collect($messagesArray)->sortBy('created_at')->all();

        foreach($messagesArray as $collection => $queue){
            /*$count = count($queue) - 1;
            for($i = 0; $i <= $count; $i++){
             echo $queue[$i]->date."\n";
            }*/
            foreach($queue as $Q){
                $timeline[] = $Q;

            }
     }
        // dd($timeline);
        return $timeline;
    }

    public static function feed($user, $take = 50)
    {
        return $user->activity()->latest()->with('subject')->take($take)->get()->groupBy(function($activity) {
            return $activity->created_at->format('Y-m-d');
        });
    }
}
