<?php

$iocContainer = \Ganymed\IocContainer::getInstance();

$paths = require_once __DIR__ . '/../app/config/paths.php';

function getBaseDir()
{
    global $paths;
    return $paths['base'];
}

function getPublicDir()
{
    global $paths;
    return $paths['public'];
}

function getViewDir()
{
    global $paths;
    return $paths['view'];
}

function getStorageDir()
{
    global $paths;
    return $paths['storage'];
}

function redirect($url, $permanent = false)
{
    if (headers_sent() === false) {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

function hashString($password)
{
    return $password;
}

function dd($value)
{
    echo '<pre>';
    print_r($value);
    die();
}

function pd($value)
{
    echo '<pre>';
    print_r($value);
}

/**
 * wrapper for the view class
 * @param $template
 * @return \Ganymed\Services\View
 */
function view($template)
{
    global $iocContainer;
    $view = $iocContainer->getClass('View');
    return $view->withTemplate($template);
}

function flash($message)
{
    global $iocContainer;
    $session = $iocContainer->getClass('Session');
    $session->putFlashMessage($message);
}