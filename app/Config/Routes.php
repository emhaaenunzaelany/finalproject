<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('login', 'AuthController::login');
$routes->post('auth/authenticate', 'AuthController::authenticate');
$routes->get('logout', 'AuthController::logout');

$routes->get('submissions', 'SubmissionController::index');
$routes->get('submissions/create', 'SubmissionController::create');
$routes->post('submissions/store', 'SubmissionController::store');

$routes->get('admin', 'AdminController::index');
$routes->get('admin/approve/(:num)', 'AdminController::approve/$1');
$routes->get('admin/reject/(:num)', 'AdminController::reject/$1');

$routes->get('dashboard', 'DashboardController::index');
$routes->get('login', 'AuthController::login');
$routes->post('auth/authenticate', 'AuthController::authenticate');
$routes->get('logout', 'AuthController::logout');

$routes->get('submissions', 'SubmissionController::index');
$routes->get('submissions/create', 'SubmissionController::create');
$routes->post('submissions/store', 'SubmissionController::store');

$routes->get('admin/submissions', 'AdminController::submissions');
$routes->get('admin/approve/(:num)', 'AdminController::approve/$1');
$routes->get('admin/reject/(:num)', 'AdminController::reject/$1');

$routes->get('admin/users', 'UserController::index');
$routes->get('admin/users/create', 'UserController::create');
$routes->post('admin/users/store', 'UserController::store');
$routes->get('admin/users/edit/(:num)', 'UserController::edit/$1');
$routes->post('admin/users/update/(:num)', 'UserController::update/$1');
$routes->get('admin/users/delete/(:num)', 'UserController::delete/$1');
