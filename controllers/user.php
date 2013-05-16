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
	function loginUser() {
		if (!empty($_SESSION['username'])) 
			and $_POST['username'] == $this->username
			and $_POST['password'] == $this->password; {
			$_SESSION['views'] = $_POST['username'];
		}
	}
	/*
		We're currently using the logout.php script.
		function logoutUser() {	
		}
	*/
}
?>
