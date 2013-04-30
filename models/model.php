<?php
class Model {
    protected static $table = '';

    protected $id = 0;

    protected static function getByID($id) {
        $this->getBy(
            array('id' => $id),
            $limit=1
        );
    }

    protected static function getBy($arr_fields, $limit=0) {
    }

    protected static function deleteByID($id) {
        $this->deleteBy(
            array('id' => $id),
            $limit=1
        );
    }

    protected static function deleteBy($arr_fields, $limit=0) {
    }

}
?>
