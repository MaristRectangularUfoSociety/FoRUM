<?php
class Forum extends Controller{

	function loadCreateForum() {
	    if (!empty($_POST)) {
                $forum = new Forum_Model();
                $category = new Category_Model();

                $category = $category->getByID($_POST['categoryID']);

                $forum->name = $_POST['name'];
                $forum->category = $category;
                $forum->save();
	    }
	    else {
	        $this->loadView('create_forum', array());
	    }
	}
}
?>
