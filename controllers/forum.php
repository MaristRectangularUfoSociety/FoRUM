<?php
class Forum extends Controller{

	function create() {
	    if (!empty($_POST)) {
			$this->forum_model->create(
			    array(
			        'category' => $_POST['category'],
			        'name' => $_POST['name']
			    )
			);
	    }
	    else {
	        $this->loadView('create_forum', array());
	    }
	}
}
?>
