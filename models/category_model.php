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

    protected static function getBy($arr_fields, $limit=0) {
        $category = parent::getBy($arr_fields, $limit);
        $category->forums = $forum_model->getBy(
            array(
                'categoryID' => $this->categoryID
            )
        );
        return $category;
    }
}

$category_model = new Category_Model();
?>
