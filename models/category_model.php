<?php
class Category_Model extends Model {
    public function __construct() {
        parent::__construct();
        $this->table = 'Categories';
        $this->fields = array('name', 'order');

        $this->categoryID = 0;
        $this->name = '';
        $this->order = 1;
    }
}

$category_model = new Category_Model();
?>
