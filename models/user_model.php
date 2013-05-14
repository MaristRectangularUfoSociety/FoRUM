<?php
class User_Model extends Model {
    protected static $table = 'Users';
    protected static $fields = array();

    private $username = '';
    private $passwordHashed = '';

    public static function hashPassword($pass) {
        return $pass;
    }

}
?>
