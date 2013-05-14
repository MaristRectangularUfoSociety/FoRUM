<?php
class Topic_Model extends Model {
    public function __construct() {
        parent::__construct();
        $this->table = 'Topics';
        $this->fields = array('topicID', 'forumID', 'title');
    }
}

$topic_model = new Topic_Model();
?>
