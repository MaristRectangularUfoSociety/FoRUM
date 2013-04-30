<?php
include "model.php";

class Category_Model extends Model {
    protected static $table = 'Categories';
    protected static $fields = array('categoryID', 'name', 'order');
}
?>
