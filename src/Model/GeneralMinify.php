<?php

namespace App\Model;

use MatthiasMullie\Minify as Mini;

class GeneralMinify{

    protected $mini;

    public function __construct($type)
    {
        // This will be css or js
        $this->mini = ($type == 'css') ? new Mini\CSS() : new Mini\JS();
    }

    public function minify($content)
    {
        $this->mini->add($content);
        return $this->mini->minify();
    }

}