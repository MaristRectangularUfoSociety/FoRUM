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

    public function getID() {
        return $this->categoryID;
    }

    public function getName() {
        return $this->name;
    }

    public function getOrder() {
        return $this->order;
    }

    public function getForums() {
        if (empty($this->forums)) {
            $forum_model = new Forum_Model();
            $this->forums = $forum_model->getBy(
                array(
                    'categoryID' => $this->categoryID
                )
            );
        }
        else {
            return $this->forums;
        }
    }
}

$category_model = new Category_Model();
?>
