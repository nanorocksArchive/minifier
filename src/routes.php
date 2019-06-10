<?php

Flight::route('GET /', ['HomeController','home']);

Flight::route('GET /js', ['HomeController','js']);

Flight::route('GET /css', ['HomeController','css']);