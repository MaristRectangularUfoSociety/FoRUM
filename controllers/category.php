<?php
class Category extends Controller {

	function loadCreateCategory() {
	    print_r("AYOAY");
		if (!empty($_POST)) {
            print_r("AYOAY");
            $category = new Category_Model();
            $category->name = $_POST['name'];
            $category->save();
		} else {
		    $this->loadView('create_category', array());
		}
	}
}
?>
