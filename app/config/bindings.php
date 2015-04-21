<?php

/*
|--------------------------------------------------------------------------
| Class Bindings
|--------------------------------------------------------------------------
|
| Register any class here which needs specific parameters to be instantiated
| and should be resolved by the ioc container.
|
*/

return array(
    'Session' => function () {
        return new Ganymed\Services\Session(require __DIR__ . '/session.php');
    },
    'View' => function () {
        $paths = require __DIR__ . '/paths.php';
        return new \Ganymed\View\View($paths['view']);
    }
);