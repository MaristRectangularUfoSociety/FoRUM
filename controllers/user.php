<?php
class Users{
//done(ish)
	function list{
		$users = getmealltheusers;
		$data = array('users'=> $users);
		loadview(nameofnicksview,$data);
	}

	function create{
		if(isset($_GET['var'])){
			loadview(Register.php, array());
		}
		elseif(isset($_POST)){
			$user = $_POST['username']
			$user = $_POST['email']
			$user = $_POST['password']

			travis.createthisuser($user);
			index.index();
		}


	}
}
?>