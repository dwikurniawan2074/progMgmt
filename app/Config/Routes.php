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
//Project CRUD Route
$routes->get('/user/tambahProject', 'ProjectController::showForm');
$routes->match(['get', 'post'], '/user/tambahProject/post', 'ProjectController::create');
$routes->get('/user/editProject', 'ProjectController::edit');
$routes->match(['get','post'], '/user/editProject/(:num)','ProjectController::update/$1');
$routes->get('/user/deleteProject/(:num)', 'ProjectController::delete/$1');
//Task CRUD Route
$routes->get('/user/tambahTask', 'TaskController::showForm');
$routes->match(['get', 'post'], '/user/tambahTask/post', 'TaskController::create');
$routes->get('/user/editTask/(:num)', 'TaskController::edit/$1');
$routes->match(['get','post'], '/user/editTask/(:num)','TaskController::update/$1');
$routes->get('/user/deleteTask/(:num)', 'TaskController::delete/$1');
//Subtask CRUD Route
$routes->get('/user/tambahSubtask', 'SubtaskController::showForm');
$routes->match(['get', 'post'], '/user/tambahSubtask/post', 'SubtaskController::create');
$routes->get('/user/editSubtask/(:num)', 'SubtaskController::edit/$1');
$routes->match(['get','post'], '/user/editSubtask/(:num)','SubtaskController::update/$1');
$routes->get('/user/deleteSubtask/(:num)', 'SubtaskController::delete/$1');



