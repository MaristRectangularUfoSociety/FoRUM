<?php
class Category_Model extends Model {

    public $name = '';
    public $order = 1;
    public $forums = array();

    protected $table = 'Categories';
    protected $fields = array('name', 'order');
    protected $fieldID = 'categoryID';

    private $categoryID = 0;

    function __construct() {
        parent::__construct();
    }

    public function get_id() {
        return $this->categoryID;
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
