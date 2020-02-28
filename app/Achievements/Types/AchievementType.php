<?php

namespace App\Achievements\Types;


use App\Achievement;

abstract class AchievementType 
{

    protected $model;

    public function __construct()
    {
        $this->model = Achievement::firstOrCreate([
            'name' => $this->name(),
            'description' => $this->description,
            'icon' => $this->icon
        ]);
    }

    public function name()
    {
        if(property_exists($this, 'name'))
        {
            return $this->name;
        }

        return trim(preg_replace('/[A-Z]/', ' $0', class_basename($this)));
    }

    public function modelKey()
    {
        return $this->model->getKey();
    }
}