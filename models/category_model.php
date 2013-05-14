<?php
class Category_Model extends Model {
    protected static $table = 'Categories';
    protected static $fields = array('categoryID', 'name', 'order');
}

$category_model = new Category_Model();
?>
