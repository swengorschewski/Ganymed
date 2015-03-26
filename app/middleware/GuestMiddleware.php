<?php

use Ganymed\Auth\Auth;
use Ganymed\MiddlewareInterface;

class GuestMiddleware implements MiddlewareInterface {

    private $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function execute()
    {
        if($this->auth->check()) {
            redirect('/dashboard');
        }
    }

}