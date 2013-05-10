<?php
class Category{
//done(ish)
	function list{
		$forum = getmealltheusers;
		$data = array('forum'=> $forum);
		loadview(nameofnicksview,$data);
	}

	function create{
		if(get){
			loadview(nameofnicksview, array());
		}
		elseif(post){
			$category = $_POST['name']

			travis.createthisuser($category);
			index.index();
		}


	}
}
?>