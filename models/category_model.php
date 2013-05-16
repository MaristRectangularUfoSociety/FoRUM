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

    public function save() {
        if (!$this->order) {
            $biggestOrder = $this->db->query(
                "SELECT MAX(`order`) FROM $this->table"
            );
            $this->order = $biggestOrder->getOrder() + 1;
        }
        parent::save();
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
        return $this->forums;
    }
}

$category_model = new Category_Model();
?>
