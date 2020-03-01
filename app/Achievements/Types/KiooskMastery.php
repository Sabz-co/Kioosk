<?php

namespace App\Achievements\Types;


class KiooskMastery extends AchievementType
{
    public $name = 'Kioosk Mastery';

    public $description = 'You are now a Kioosk master!';

    public $icon = 'kioosk-mastery.svg';


    public function qualifier($user)
    {
        return $user->experience->points >= 50000;
    }


}