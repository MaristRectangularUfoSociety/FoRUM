<?php
class User_Model extends Model {
    protected $table = 'Users';

    private $userID = '';
    private $username = '';
    private $passwordHashed = '';

    public static function hashPassword($pass) {
        return $pass
    }

}
?>
