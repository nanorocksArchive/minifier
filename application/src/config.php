<?php
/**
 * Config for database, controllers ...
 */

// Autoload for controllers. Can we change it with psr-4?  
spl_autoload_register(function($class){
    require_once __DIR__ . "/Controller/{$class}.php";
});

