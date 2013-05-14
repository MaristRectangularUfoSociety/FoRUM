<?php
include_once 'models/all_models.php';

class Controller {
    private $name = '';

    public function __construct($name) {
        $this->name = $name;
        $this->audit_model = new Audit_model();
        $this->category_model = new Category_model();
        $this->forum_model = new Forum_model();
        $this->post_model = new Post_model();
        $this->topic_model = new Topic_model();
        $this->user_model = new User_model();
    }

    public function loadView($view_location, $data) {
        extract($data);
        include('views/' . $view_location . '.php');
    }
}
?>
