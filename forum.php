<?php
class Forum{
//done(ish)
	function list{
		$topic = getmealltheusers;
		$data = array('topic'=> $topic);
		loadview(nameofnicksview,$data);
	}

	function create{
		if(isset($_GET['var'])){
			loadview(nameofnicksview, array());
		}
		elseif(isset($_POST)){
			$forum = $_POST['category']
			$forum = $_POST['name']

			travis.createthisuser($forum);
			index.index();
		}


	}
}
?>