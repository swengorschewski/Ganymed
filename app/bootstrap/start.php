<?php

use Ganymed\App;
use Ganymed\IocContainer;
use Ganymed\Router\Router;

/*
|--------------------------------------------------------------------------
| Helper Functions
|--------------------------------------------------------------------------
|
| Include the helpers.php to make helper functions available to every
| part of the framework.
|
*/
require_once __DIR__ . '/../helpers.php';

/*
|--------------------------------------------------------------------------
| Class Bindings
|--------------------------------------------------------------------------
|
| Load the class bindings for the ioc container.
|
*/

$bindings = require __DIR__ . '/../config/bindings.php';

/*
|--------------------------------------------------------------------------
| IoC container
|--------------------------------------------------------------------------
|
| Get an instance of the ioc container and bind resolvable classes.
|
*/

$iocContainer = IocContainer::getInstance();
$iocContainer->bind($bindings);

/*
|--------------------------------------------------------------------------
| Application
|--------------------------------------------------------------------------
|
| Initialize the application.
|
*/

$app = new App;

/*
|--------------------------------------------------------------------------
| Environment
|--------------------------------------------------------------------------
|
| Include the .env.php to setup the environment variables.
|
*/

$dotEnv = __DIR__ . '/../../.env.php';

$app->setEnv($dotEnv);

/*
|--------------------------------------------------------------------------
| Router
|--------------------------------------------------------------------------
|
| Get an instance of the Router and include the routes file.
|
*/

$router = Router::getInstance();
require_once __DIR__ . '/../routes.php';

/*
|--------------------------------------------------------------------------
| Application
|--------------------------------------------------------------------------
|
| Execute the app (resolve routes, resolve and instantiate classes,
| dispatch views, handle errors and so on).
|
*/

$app->execute($router);