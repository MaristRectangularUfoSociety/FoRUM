<?php
class Category{
//done(ish)
	function list() {
		$forum = getmealltheusers;
		$data = array('forum'=> $forum);
		loadview(nameofnicksview,$data);
	}

	function create{
		if(isset($_GET['var'])){
			loadview(nameofnicksview, array());
		}
		elseif(isset($_POST)){
			$category = $_POST['name']

			travis.createthisuser($category);
			index.index();
		}


	}
}
?>
