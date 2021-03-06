<?php
require_once 'ModelBase.php';

class StatsModel extends ModelBase
{
	protected $_name = 'stats';
	protected $_key = 'worker_id';
	
	function getByWorkerId($wid) {
		$sql = "SELECT * FROM $this->_name WHERE worker_id = ? ORDER BY `time` DESC LIMIT 200";
		
		$db = $this->getSlaveDb();
		return $db->getResult($sql, $wid);
	}
}
?>