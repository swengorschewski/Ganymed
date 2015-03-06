<?php

class InstallController {

    public function seed()
    {
        $user = new User();
        $user->email = 'ganymed';
        $user->password = password_hash('ganymed', CRYPT_BLOWFISH);
        $user->save();
    }

}