<?php

namespace App;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

class MyIndexConfigurator extends IndexConfigurator
{
    use Migratable;

    protected $name = 'my_books';  

    /**
     * @var array
     */
    protected $settings = [];
}