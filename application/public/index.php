<?php
/**
 * Add autoload 
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Setup config requirements
 */
require_once __DIR__ . '/../src/config.php';

/**
 * Setup dependencies for app
 */
require_once __DIR__ . '/../src/dependencies.php';

/**
 * Starting the app
 */
Flight::start();