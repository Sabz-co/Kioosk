<?php

namespace App\Listeners;

use App\Events\UserEarnedExperience;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AwardAchievements
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserEarnedExperience  $event
     * @return void
     */
    public function handle(UserEarnedExperience $event)
    {
        //
    }
}
