<?php

namespace App\Achievements\Types;


class FirstThousandPoints extends AchievementType
{
    public $name = 'First Thousand Points';

    public $description = 'Great Job! You are on your way!';

    public $icon = 'first-thousand.svg';


    public function qualifier($user)
    {
        return $user->experience->points >= 1000;
    }


}