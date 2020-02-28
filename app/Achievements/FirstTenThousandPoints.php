<?php

namespace App\Achievements;

use App\Achievement;

class FirstTenThousandPoints
{
    public $name = 'First Ten Thousand Points';

    public $description = 'Great Job! You are killing it my man!';

    public $icon = 'first-ten-thousand.svg';

    protected $model;

    public function __construct()
    {
        $this->model = Achievement::firstOrCreate([
            'name' => $this->name,
            'description' => $this->description,
            'icon' => $this->icon
        ]);
    }

    public function qualifier($user)
    {
        return $user->experience->points >= 10000;
    }

    public function modelKey()
    {
        return $this->model->getKey();
    }
}