<?php
class Category_Model extends Model {
    public function __construct() {
        parent::__construct();
        $this->table = 'Categories';
        $this->fields = array('categoryID', 'name', 'order');
    }
}

$category_model = new Category_Model();
?>
