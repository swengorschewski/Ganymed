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
    pd($value);
    die();
}

function pd($value)
{
    echo '<pre>';
    if(is_array($value)) {
        print_r(escape_array($value));
    } elseif(is_string($value)) {
        print_r(htmlspecialchars($value));
    } else {
        print_r($value);
    }
}

function escape_array($array) {
    foreach($array as $key => $entry) {
        if(is_array($entry)) {
            $array[$key] = escape_array($entry);
        } else {
            $array[$key] = htmlspecialchars($entry);
        }
    }

    return $array;
}

/**
 * wrapper for the view class
 * @param $viewName
 * @return \Ganymed\Templating\View
 */
function view($viewName)
{
    global $iocContainer;
    $view = $iocContainer->getClass('View');
    return $view->make($viewName);
}

function flash($message)
{
    global $iocContainer;
    $session = $iocContainer->getClass('Session');
    $session->putFlashMessage($message);
}