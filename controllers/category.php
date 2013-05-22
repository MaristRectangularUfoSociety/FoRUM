<?php
class Category extends Controller {

    function loadCreateCategory() {
        if (!empty($_POST)) {
            $category = new Category_Model();
            $category->name = $_POST['name'];
            $category->save();

            $index = new Index();
            $index->loadIndex();
        } else {
            $this->loadView('create_category', array());
        }
    }
}
?>
