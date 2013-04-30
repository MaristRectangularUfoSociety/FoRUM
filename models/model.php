<?php
class Model {
    protected static $table = '';

    protected $id = 0;

    // Create
    protected static function create($arr_fields) {
    }

    // Read
    protected static function getByID($id) {
        $this->getBy(
            array('id' => $id),
            $limit=1
        );
    }

    protected static function getBy($arr_fields, $limit=0) {
    }

    // Update
    protected static function updateBy($arr_fields_matching, $arr_fields_update, $limit=0) {
    }

    protected static function updateByID($id, $arr_fields_update) {
        $this->updateBy(
            array('id' => $id),
            $arr_fields_update,
            $limit=1
        );
    }

    // Destroy
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
