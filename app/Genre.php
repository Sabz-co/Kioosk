<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

  protected $table = 'tagging_tags';


    public function books()
    {
      return $this->morphedByMany('App\Book', 'taggable', 'tagging_tagged', 'tag_name');
    }
}
