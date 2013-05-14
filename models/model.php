<?php
class Model {
    protected $db = null;

    protected $table = '';
    protected $fields = array();

    protected $id = 0;

    public function __construct() {
        $theConnectionJSON = getenv("VCAP_SERVICES");
        $theConnection = json_decode($theConnectionJSON, true);

        $dbname = $theConnection['mysql-5.1'][0]['credentials']['name'];
        $hostname = $theConnection['mysql-5.1'][0]['credentials']['hostname'];
        $username = $theConnection['mysql-5.1'][0]['credentials']['username'];
        $password = $theConnection['mysql-5.1'][0]['credentials']['password'];

        $this->db = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    }

    protected function query($sql, $parameters) {
        $statement = $this->db->prepare($sql);
        $statement->execute($parameters);
        return $statement->fetchAll();
    }

    public function save() {
        $return = '';
        $myFieldsToSave = array();

        foreach ($fields as $field) {
            $myFieldsToSave[$field] = $this->{$field};
        }
        if ($this->id) {
            $return = $this->updateByID($this->id, $myFieldsToSave);
        } else {
            $return = $this->create($myFieldsToSave);
        }

        return $return;
    }

    // Create
    protected static function create($arr_fields) {
        // PHP's associative arrays are guaranteed to produce the same order each call

        // Create a comma-separated list of field names
        $fieldsStr = implode(',', array_keys($arr_fields));

        // Creates an array of '?' for filling in our prepare-query
        $questions = array_fill(0, array_len($arr_fields), '?');
        $questionStr = implode(',', $questions);

        $sql = "INSERT INTO $this->table ($fieldsStr) VALUES ($questionStr)";
        return $this->query($sql, array_values($arr_fields));

    }

    // Read

    public function all() {
        $sql = "SELECT * FROM $this->table";
        return $this->query($sql, array());
    }

    protected static function getByID($id) {
        return $this->getBy(
            array('id' => $id),
            $limit=1
        );
    }

    protected static function getBy($arr_fields, $limit=0) {
        $sql_params = array();
        $sql = "SELECT * FROM $this->table ";
        if (!empty($arr_fields)) {
            $sql .= 'WHERE ';
            foreach ($field in array_keys($arr_fields)) {
                $sql_params[] = "$field = ?";
            }
        }
        $sql .= implode(' OR ', $sql_params);

        $this->query($sql, array_values($arr_fields));
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
