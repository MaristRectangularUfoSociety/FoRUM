<?php
class User extends Controller {
    function register() {
        if (!empty($_POST)) {
            $this->user_model->create(
                array(
                    'username' => $_POST['username'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password']
                )
            );
        } else {
            $this->loadView('register', array());
        }
    }
}
?>
