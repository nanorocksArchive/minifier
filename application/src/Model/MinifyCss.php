<?php

namespace App\Model;

use MatthiasMullie\Minify as Mini;

class MinifyCss{

    protected $path;

    protected $mini;

    public function __construct($path)
    {
        $this->path = $path;
        $this->mini = new Mini\CSS($this->path);
    }

    public function readFromFile()
    {
        $content = file_get_contents($this->path);
        $this->mini->add($content);

        return $this->mini->minify();
    }


    // // save minified file to disk
    // $minifiedPath = '/path/to/minified/css/file.css';
    // $minifier->minify($minifiedPath);
}


