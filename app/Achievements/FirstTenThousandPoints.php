<?php

namespace App\Achievements;


class FirstTenThousandPoints extends AchievementType
{
    public $name = 'First Ten Thousand Points';

    public $description = 'Great Job! You are killing it my man!';

    public $icon = 'first-ten-thousand.svg';



    public function qualifier($user)
    {
        return $user->experience->points >= 10000;
    }

}