<?php

namespace App\Events;


use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserEarnedExperience
{
    use Dispatchable, SerializesModels;

    public $user, $experience;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $experience)
    {
        $this->user = $user;
        $this->experience = $experience;
    }

 
}
