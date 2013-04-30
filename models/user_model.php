<?php
include "model.php";

class User_Model extends Model {
    protected static $table = 'Users';

    private $username = '';
    private $passwordHashed = '';

    public static function hashPassword($pass) {
        return $pass;
    }

}
?>
