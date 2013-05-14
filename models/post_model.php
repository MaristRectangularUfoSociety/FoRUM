<?php
class Post_Model extends Model {
    protected static $table = 'Posts';
    protected static $fields = array('postID', 'topicID', 'message');
}
?>
