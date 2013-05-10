<?php
class Forum{
//done(ish)
	function list{
		$topic = getmealltheusers;
		$data = array('topic'=> $topic);
		loadview(nameofnicksview,$data);
	}

	function create{
		if(get){
			loadview(nameofnicksview, array());
		}
		elseif(post){
			$forum = $_POST['category']
			$forum = $_POST['name']

			travis.createthisuser($forum);
			index.index();
		}


	}
}
?>