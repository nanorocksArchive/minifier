<?php

use App\Model\MinifyCss;

class HomeController
{

    public function home()
    {
        Flight::render('home/home.html.php', array('name' => 'Bob'));
    }

    public function css()
    {
        echo "css page!!!";
    }

    public function js()
    {
        echo "js page!!!";
    }
}
