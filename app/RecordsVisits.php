<?php

namespace App;

use Illuminate\Support\Facades\Redis;


trait RecordsVisits
{
    public function recordVisit()
    {
      Redis::incr("books.{$this->id}.visits");

      return $this;
    }

    public function visits()
    {
      return Redis::incr("books.{$this->id}.visits") ?? 0;
    }

}
