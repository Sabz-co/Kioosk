<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
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
