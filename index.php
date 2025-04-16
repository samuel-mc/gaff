<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
#define('__ROOT__', "http://localhost/gaff");
define('__ROOT__', "http://localhost/proyectos/Sebas/gaff");


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

Flight::route('/thanks', function () {
    Flight::render('thanks.php', array('title' => 'Thanks'));
});

Flight::route('/acerca', function () {
    Flight::render('acerca.php', array('title' => 'Acerca'));
});

Flight::route('/enterate', function () {
    Flight::render('enterate.php', array('title' => 'Enterate'));
});

Flight::route('/contacto', function () {
    Flight::render('contacto.php', array('title' => 'Contacto'));
});

Flight::route('/faq', function () {
    Flight::render('faq.php', array('title' => 'Faq'));
});

Flight::route('/videos', function () {
    Flight::render('videos.php', array('title' => 'Videos'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
