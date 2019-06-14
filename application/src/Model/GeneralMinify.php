<?php

namespace App\Model;

use MatthiasMullie\Minify as Mini;

class GeneralMinify{

    protected $mini;

    public function __construct($type)
    {
        if ($type == 'css') // This will be css od js
        {
            $this->mini = new Mini\CSS();
        }else{
            $this->mini = new Mini\JS();
        }
    }

    public function minify($content)
    {
        $this->mini->add($content);
        return $this->mini->minify();
    }

}


