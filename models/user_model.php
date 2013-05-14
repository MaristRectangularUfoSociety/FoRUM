<?php
class User_Model extends Model {
    private $username = '';
    private $passwordHashed = '';

    public function __construct() {
        parent::__construct();
        $this->table = 'Users';
        $this->fields = array();
    }

    public static function hashPassword($pass) {
        return $pass;
    }

}

$user_model = new User_Model();
?>
