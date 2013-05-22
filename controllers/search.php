<?php
class search extends Controller {
    function search() {
        $audit = new Audit_Model();
        if (isset($_GET['params'])) {
            $data = array(
                'results' => $audit->search($_GET['params']);
            );
            $this->loadView('search');
        }
    }
}
?>
