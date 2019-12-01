<?php

use App\Model\GeneralMinify;

class HomeController
{
    /**
     * @var string fileType
     */
    protected static $fileType = 'css';

    /**
     * Render home page
     */
    public static function home()
    {
        Flight::render('home/home.html.twig');
    }

    /**
     * Render processed css
     */
    public static function css()
    {
        self::processFile('css');
    }

    /**
     * Render processed js
     */
    public static function js()
    {
        self::processFile('js');
    }

    /**
     * Processing css & js
     */
    public static function processFile($fileType)
    {
        $request = Flight::request();

        $OldContent = $request->data['content'];
        $type = $request->data['type'];

        if (strtolower($type) != $fileType) {
            Flight::render('home/home.html.twig', ['error' => "Invalid type, only {$fileType} allowed."]);
        }

        $m = new GeneralMinify($fileType);
        $NewContent = $m->minify($OldContent);

        Flight::render('home/home.html.twig', ['NewContent' => $NewContent, 'OldContent' => $OldContent, 'type' => $fileType]);

    }
}
