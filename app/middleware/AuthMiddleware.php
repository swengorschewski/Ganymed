<?php

use Ganymed\MiddlewareInterface;

class AuthMiddleware implements  MiddlewareInterface {
    
    public function __construct()
    {
        
    }

    public function execute()
    {
        dd('middleware');
    }
}