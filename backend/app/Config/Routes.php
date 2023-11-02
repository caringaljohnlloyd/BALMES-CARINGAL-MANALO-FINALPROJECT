<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/getData','MainController::getData');
$routes->post('/save','MainController::save');
$routes->post('/del','MainController::del');
$routes->post('update/(:num)', 'MainController::update/$1');
$routes->get('/login', 'MainController::login');




