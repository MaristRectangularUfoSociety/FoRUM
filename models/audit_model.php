<?php
class Audit_Model extends Model {

    private $userID = 0;
    private $referencedTable = '';
    private $data = '';
    private $occurred = null;
    private $primaryKeyOfTable = 0;

    public function __construct($userID=0, $referencedTable='', $data='', $occurred=null, $primaryKeyOfTable=0) {
        parent::__construct();

        $this->table = 'Audits';
        $this->fields = array('userID', 'referencedTable', 'occurred', 'primaryKeyOfTable');
        $this->userID = $userID;
        $this->referencedTable = $referencedTable;
        $this->data = $data;
        $this->occurred = $occurred;
        $this->primaryKeyOfTable = $primaryKeyOfTable;

    }
}
$audit_model = new Audit_Model();
?>
