<?php

namespace App;

use App\Events\UserEarnedExperience;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Experience extends Eloquent
{
    protected $table = 'forum_experience';

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function awardExperience($points)
    {
        
        $this->increment('points', $points);

        UserEarnedExperience::dispatch($this->user, $points, $this->points);

        return $this;
    }
}
