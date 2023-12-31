<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// example.com routes to app/Controllers/Home.php
//Setting CS to default page
$routes->setDefaultController('User');
$routes->setDefaultMethod('index');

$routes->get('/user/view/(:num)', 'User::view/$1');


$routes->setAutoRoute(true);

//$routes->get('/', 'Home::index');
//$routes->get('/home', 'Home::index');
//$routes->get('/user', 'User::index');