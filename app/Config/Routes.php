<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'LoginController::index');
$routes->get('/login', 'LoginController::index');


// Routes Admin Disini!
$routes->get('/admin/index', 'AdminController::index');
$routes->get('/admin/dataAkun', 'AdminController::dataAkun');
$routes->get('/admin/tambahAkun', 'AdminController::tambahAkun');
$routes->get('/admin/editAkun', 'AdminController::editAkun');
$routes->get('/admin/taskProject', 'AdminController::taskProject');
$routes->get('/admin/subtaskProject', 'AdminController::subtaskProject');


// Routes User Disini
$routes->get('/user/index', 'UserController::index');
$routes->get('/user/taskProject', 'UserController::taskProject');
$routes->get('/user/subtaskProject', 'UserController::subtaskProject');

$routes->get('/user/tambahProject', 'ProjectController::showForm');
$routes->match(['get', 'post'], '/user/tambahProject/post', 'ProjectController::create');

$routes->get('/user/editProject', 'ProjectController::edit');
$routes->match(['get','post'], '/user/editProject/(:num)','ProjectController::update/$1');

$routes->get('/user/deleteProject/(:num)', 'ProjectController::delete/$1')


$routes->get('/user/tambahTask', 'UserController::tambahTask');
$routes->get('/user/tambahSubtask', 'UserController::tambahSubtask');
$routes->get('/user/editSubtask', 'UserController::editSubtask');
$routes->get('/user/editTask', 'UserController::editTask');

