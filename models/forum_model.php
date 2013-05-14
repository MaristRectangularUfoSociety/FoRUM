<?php
class Forum_Model extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'Forums';
        $this->fields = array('forumID', 'categoryID', 'order', 'name');
    }
}

$forum_model = new Forum_Model();
?>
