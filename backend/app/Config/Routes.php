<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/getData','MainController::getData');
$routes->get('/getDataShop','MainController::getDataShop');
$routes->post('/saveShop','MainController::saveShop');
$routes->post('/register','MainController::register');
$routes->post('/del','MainController::del');
$routes->post('update/(:num)', 'MainController::update/$1');
$routes->match(['post','get'],'/login', 'MainController::login');
$routes->post('/submit-feedback', 'MainController::submitFeedback');
$routes->post('save', 'MainController::save');
$routes->post('/logout', 'MainController::logout');
$routes->post('/getCart', 'MainController::Cart');
$routes->get('/getProd/(:num)', 'MainController::getCart/$1');
$routes->get('/getRoom','MainController::getRoom');
$routes->get('/getShop','MainController::getShop');
$routes->get('/getPool','MainController::getPool');
$routes->get('/getManifest','MainController::getManifest');
$routes->post('manifest','MainController::manifest');
$routes->post('updateCartQuantity', 'MainController::updateCartQuantity');
$routes->get('/getFeedback','MainController::getFeedback');
$routes->post('booking','MainController::booking');
$routes->get('/getbook','MainController::getbook');
$routes->post('/submit-rating','MainController::submitRating');
$routes->post('/checkout', 'MainController::checkout');
$routes->get('/search/(:any)', 'MainController::search/$1');
$routes->get('/getInvoice','MainController::getInvoice');
$routes->put('updateQuantity/(:num)', 'MainController::updateQuantity/$1');
$routes->post('updateQuantity', 'MainController::updateQuantity');
$routes->get('api/auditHistory/(:num)', 'MainController::getAuditHistory/$1');
$routes->post('/api/feedback/delete/(:num)', 'MainController::deleteFeedback/$1');





//di pa okay
$routes->group('api', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->post('reset-password', 'MainController::resetPassword');
});
$routes->group('api', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->post('update-password', 'MainController::updatePassword');
});







