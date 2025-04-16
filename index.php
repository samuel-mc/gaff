<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/gaff");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'GAFF'));
});

Flight::route('/products', function () {
    Flight::render('products.php', array('title' => 'Products'));
});

Flight::route('/product-detail', function () {
    Flight::render('product_detail.php', array('title' => 'Product Detail'));
});

Flight::route('/distributors/nationals', function () {
    Flight::render('nationals.php', array('title' => 'Nationals'));
});

Flight::route('/distributors/internationals', function () {
    Flight::render('internationals.php', array('title' => 'Internationals'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
