<?php
class Post{
//done(ish)
	function create{
		if(isset($_GET['var'])){
			loadview(nameofnicksview, array());
		}
		elseif(isset($_POST)){
			$post = $_POST['topic']
			$post = $_POST['username']
			$post = $_POST['text']
			$post = $_POST['timestamp']

			travis.createthistopic($post);
			index.index();
		}

}
?>