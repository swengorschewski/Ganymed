<?php


use Ganymed\Persistence\Model;

class User extends Model {

    public function setPassword($password)
    {
        $this->password = password_hash($password, CRYPT_BLOWFISH);
    }

}