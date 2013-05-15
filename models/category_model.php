<?php
class Category_Model extends Model {

    public $name = '';
    public $order = 1;
    public $forums = array();

    protected $categoryID = 0;
    protected $table = 'Categories';
    protected $fields = array('name', 'order');

    function __construct() {
        parent::__construct();
    }
}

$category_model = new Category_Model();
?>
