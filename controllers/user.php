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
	function loadLogin() {
		if (!empty($_POST)) {
		    $user = new User_Model();
		    $success = $user->login($_POST['username'], $_POST['password']);
		    if ($success) {
		        $_SESSION['user'] = serialize($user);
                $index = new Index();
                $index->loadIndex();
		    } else {
		        $this->loadView('invaliduser', array());
		    }
		} else {
            $index = new Index();
            $index->loadIndex();
        }
	}
	/*
		We're currently using the logout.php script.
		function logoutUser() {	
		}
	*/
}
?>
