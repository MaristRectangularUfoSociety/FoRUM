<?php
class Forum_Model extends Model {

    public $name = '';
    public $order = 1;
    public $category = null;

    protected $table = 'Forums';
    protected $fields = array('name', 'order');
    protected $idField = 'forumID';

    protected $forumID = 0;

    function __construct() {
        parent::__construct();
    }
}

$forum_model = new Forum_Model();
?>
