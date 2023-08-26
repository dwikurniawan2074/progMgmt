<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->match(['get', 'post'], '/project/post', 'ProjectController::create');
$routes->get('/project', 'ProjectController::index');

$routes->get('/', 'LoginController::index');
$routes->get('/login', 'LoginController::index');


// Routes Admin Disini!
$routes->get('/admin/index', 'AdminController::index');
$routes->get('/admin/dataAkun', 'AdminController::dataAkun');
$routes->get('/admin/tambahAkun', 'AdminController::tambahAkun');
$routes->post('/admin/saveAkun', 'AdminController::saveAkun');
$routes->get('admin/editAkun/(:num)', 'AdminController::editAkun/$1');
$routes->post('admin/updateAkun/(:num)', 'AdminController::updateAkun/$1');
$routes->get('admin/deleteAkun/(:num)', 'AdminController::deleteAkun/$1');
$routes->get('/admin/taskProject', 'AdminController::taskProject');
$routes->get('/admin/subtaskProject', 'AdminController::subtaskProject');


// Routes User Disini
$routes->get('/user/index', 'UserController::index');
$routes->get('/user/taskProject', 'UserController::taskProject');
$routes->get('/user/subtaskProject', 'UserController::subtaskProject');
$routes->get('/user/tambahProject', 'UserController::tambahProject');
$routes->get('/user/tambahTask', 'UserController::tambahTask');
$routes->get('/user/tambahSubtask', 'UserController::tambahSubtask');
$routes->get('/user/editSubtask', 'UserController::editSubtask');
$routes->get('/user/editTask', 'UserController::editTask');
$routes->get('/user/editProject', 'UserController::editProject');

