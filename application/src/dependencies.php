<?php

/**
 * Dependencies for routes, views ...
 */

// Set twig as template engine with FLight
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
Flight::register(
    'view',
    'Twig_Environment',
    array($loader, array('debug' => true)),
    function($twig) {
        // Call back that takes instance as arugment
        // Included to show how to configure twig
    }
);
Flight::map('render', function($template, $data=array()) {
    Flight::view()->display($template, $data);
});

// Add to false on production
Flight::set('flight.log_errors', false);

require_once __DIR__ . '/routes.php';