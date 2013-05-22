<?php
class Post_Model extends Model {
    public function __construct() {
        parent::__construct();
        /*
        $this->table = 'Posts';
        $this->fields = array('postID', 'topicID', 'message');
        */
    }
}

$post_model = new Post_Model;

?>
