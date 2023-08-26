<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], '/project/post', 'ProjectController::create');
$routes->get('/project', 'ProjectController::index');
