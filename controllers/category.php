<?php
class Category extends Controller {

    function loadCreateCategory() {
        if (!empty($_POST)) {
            $category = new Category_Model();
            $category->name = $_POST['name'];
            $category->save();
        } else {
            $this->loadView('create_category', array());
        }
    }
}
?>
