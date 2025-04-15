<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/gaff");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'GAFF'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
