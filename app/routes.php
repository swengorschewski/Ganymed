<?php

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| This file defines the routes of the application. If you have many routes
| you may include additional route files here.
|
*/

$router->get('/', 'HomeController@index');

$router->get('/login', [
    'middleware' => 'GuestMiddleware',
    'controller' => 'AuthController@login'
]);

$router->post('/login', 'AuthController@doLogin');

$router->post('/logout', 'DashboardController@logout');

$router->get('/install', 'InstallController@seed');


$router->get('/dashboard', [
    'middleware' => 'AuthMiddleware',
    'controller' => 'DashboardController@index'
]);