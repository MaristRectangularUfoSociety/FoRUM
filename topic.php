<?php
class Topic{
//done(ish)
	function create{
		if(isset($_GET['var'])){
			loadview(nameofnicksview, array());
		}
		elseif(isset($_POST)){
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