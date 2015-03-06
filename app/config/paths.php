<?php

/*
|--------------------------------------------------------------------------
| Setup
|--------------------------------------------------------------------------
|
| Get base path of the application.
|
*/

$base = __DIR__ . '/../../';

return array(

    /*
    |--------------------------------------------------------------------------
    | Base Path
    |--------------------------------------------------------------------------
    |
    | Sets the base path of the application.
    |
    */

    'base' => $base,

    /*
    |--------------------------------------------------------------------------
    | Path to Public Directory
    |--------------------------------------------------------------------------
    |
    | The public directory contains the entry point of your application (index.php)
    | as well as the necessary assets like css, javascript and image files.
    |
    */

    'public' => $base . 'public/',

    /*
    |--------------------------------------------------------------------------
    | Path to View Directory
    |--------------------------------------------------------------------------
    |
    | The view directory contains all template and layout files.
    |
    */

    'view' => $base . 'resources/views/',

    /*
    |--------------------------------------------------------------------------
    | Path to Storage Directory
    |--------------------------------------------------------------------------
    |
    | The storage directory contains models that are saved via the 'file' driver.
    |
    */

    'storage' => $base . 'app/storage/',

);