<?php
class Category extends Controller {

	function loadCreateCategory() {
		if (array_key_exists('category_name', $_POST)) {
		    $this->category_model->create(array('name' => $name));
		} else {
		    $this->loadView('create_category', array());
		}
	}
}
?>
