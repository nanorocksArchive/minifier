<?php
/**
 * Add routes here !!!
 */

Flight::route('GET /', ['HomeController', 'home']);

Flight::route('POST /js', ['HomeController', 'js']);

Flight::route('POST /css', ['HomeController', 'css']);

Flight::map('notFound', function () {
    echo '404 page not found!!!';
});
