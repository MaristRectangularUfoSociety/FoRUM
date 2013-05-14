<?php
class Topic extends Controller {

    function create() {
        if (!empty($_POST)) {
            $this->topic_model->create(
                array(
                    'category' => $_POST['category'],
                    'user' => $_POST['user'],
                    'text' => $_POST['text']
                )
            );
        } else {
            $this->loadView('create_topic', array());
        }
    }
}
?>

