<?php

class InstallController {

    public function seed()
    {
        $user = new User();
        $user->email = 'ganymed';
        $user->setPassword('ganymed');
        $user->save();
    }

}