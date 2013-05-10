<?php
class Topic{
//done(ish)
	function create{
		if(get){
			loadview(nameofnicksview, array());
		}
		elseif(post){
			$topic = $_POST['catagory']
			$topic = $_POST['username']
			$topic = $_POST['text']
			$topic = $_POST['timestamp']

			travis.createthisuser($topic);
			index.index();
		}

	function list {
	$post = getMeAllTheCategories();

	$data = array('post' => $post);

		loadView('nicksViewThatIWantToLoad', $post);

	}

	}
}
?>