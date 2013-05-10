<?php
class Users{
//done(ish)
	function list{
		$users = getmealltheusers;
		$data = array('users'=> $users);
		loadview(nameofnicksview,$data);
	}

	function create{
		if(get){
			loadview(Register.php, array());
		}
		elseif(post){
			$user = $_POST['username']
			$user = $_POST['email']
			$user = $_POST['password']

			travis.createthisuser($user);
			index.index();
		}


	}
}
?>