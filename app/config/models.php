<?php

$paths = require __DIR__ . '/paths.php';

return array(

    /*
    |--------------------------------------------------------------------------
    | Model Driver
    |--------------------------------------------------------------------------
    |
    | This option sets the driver of your models. At the moment only the 'file'
    | driver is available.
    |
    */

    'driver' => 'File',

    /*
    |--------------------------------------------------------------------------
    | Model Storage Paths
    |--------------------------------------------------------------------------
    |
    | Storage location of your models for the 'file' driver.
    |
    */

    'location' => $paths['storage']

);