<?php

namespace App;

trait RecordsActivity
{

    protected static function bootRecordsActivity()
    {
        static::created(function ($thread) {
            $thread->recordActivity('created');
        });
    }
    protected function recordActivity($event)
    {

        $this->activity()->create([
            'user_id' => auth()->id(),
            'type' => $this->getActivityType($event)
        ]);

    }

    protected function getActivityType($event)
    {
        return $event . '_' . strtolower((new \ReflectionClass($this))->getShortName());
    }

    public function activity()
    {
        return $this->morphMany('App\Activity', 'subject');
    }
}