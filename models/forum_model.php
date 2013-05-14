<?php
class Forum_Model extends Model {
    protected static $table = 'Forums';
    protected static $fields = array('forumID', 'categoryID', 'order', 'name');
}

$forum_model = new Forum_Model();
?>
