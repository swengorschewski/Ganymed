<?php


use Ganymed\Persistence\Model;

class User extends Model {

    /**
     * Override the magic set method to use the email as the id for the user model.
     *
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        if ($name == 'email') {
            $this->id = $value;
            $this->$name = $value;
        } else {
            $this->$name = $value;
        }
    }

}