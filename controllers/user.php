<?php
class User extends Controller {
    function loadRegisterUser() {
        if (!empty($_POST)) {
            $user = new User_Model();
            $user->username = $_POST['username'];
            $user->password = $User_Model::hashPassword($_POST['password']);
            $user->save();
            $_SESSION['user'] = serialize($user);

            $index = new Index();
            $index->loadIndex();
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
