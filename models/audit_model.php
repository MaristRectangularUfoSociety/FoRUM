<?php
class Audit_Model extends Model {
    protected static $table = 'Audits';
    protected static $fields = array('auditID', 'userID', 'referencedTable', 'occurred', 'primaryKeyOfTable');

    private $userID = 0;
    private $referencedTable = '';
    private $data = '';
    private $occurred = Date;
    private $primaryKeyOfTable = 0;
}
?>
