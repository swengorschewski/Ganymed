<?php

use Ganymed\Controller;

class InstallController extends Controller {

    public function seed()
    {
        $user = new User();
        $user->email = 'ganymed';
        $user->setPassword('ganymed');
        $user->save();
    }

}