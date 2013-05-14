<?php
include 'models/all_models.php';

class Controller {
    private $name = '';

    public function __construct($name) {
        $this->name = $name;
    }

    public function loadView($view_location, $data) {
        extract($data);
        include('views/' . $view_location . '.php');
    }
}
?>
