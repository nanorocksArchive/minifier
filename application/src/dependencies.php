<?php

/**
 * Dependencies for routes, views ...
 */

Flight::set('flight.views.path', __DIR__ . '/../views');

Flight::set('flight.base_url', '/../public');

require_once __DIR__ . '/routes.php';