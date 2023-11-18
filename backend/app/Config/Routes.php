<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/getData','MainController::getData');
$routes->post('/register','MainController::register');
$routes->post('/del','MainController::del');
$routes->post('update/(:num)', 'MainController::update/$1');
$routes->match(['post','get'],'/login', 'MainController::login');
$routes->post('/submit-feedback', 'MainController::submitFeedback');
$routes->post('save', 'MainController::save');
$routes->get('/getFeedback','MainController::getFeedback');
$routes->post('booking','MainController::booking');
$routes->get('/getbook','MainController::getbook');
$routes->post('/logout', 'MainController::logout');
$routes->get('/getRoom','MainController::getRoom');
$routes->get('/getShop','MainController::getShop');




// Routes.php
$routes->group('api', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->post('reset-password', 'MainController::resetPassword');
});
// Routes.php
$routes->group('api', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->post('update-password', 'MainController::updatePassword');
});







