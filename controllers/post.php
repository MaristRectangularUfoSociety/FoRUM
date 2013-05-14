<?php
class Post extends Controller {
    function create() {
        if (!empty($_POST)) {
            $this->post->create(
                array(
                    'topic' => $_POST['topic'],
                    'user' => $_POST['user'],
                    'text' => $_POST['text'],
                )
            );
        } else {
            $this->loadView('create_post', array());
    }
}
?>
