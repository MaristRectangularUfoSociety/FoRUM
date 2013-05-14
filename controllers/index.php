<?php

class Index extends Controller {

	public function loadIndex() {
	    $data = array();
	    $data['categories'] = $this->category_model->all();
        $this->loadView('index', $data);
	}
}
?>
