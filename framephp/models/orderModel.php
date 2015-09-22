<?php
class orderModel extends Model {
	public function __construct() {
		parent::__construct ();
	}
public function getAllOrder() {
		$sql = "SELECT orderNumber, orderDate, requiredDate, shippedDate, status, comments, customerNumber FROM Orders
				where active = 1
				";
		// Para el borrado lógico:
		// where active = 1
		$result = $this->_db->query ( $sql );
		
		return $result;
	}
	public function getOrder($orderCode) {
		$sql = "select * from Orders where orderNumber='$orderCode'";
		$result = $this->_db->query ( $sql );
		if ($result->num_rows) {
			$reg = $result->fetch_object ();
		}
		else 
			$reg=null;
		
		return $reg;
	}
	
	public function updateOrder($orderNumber,$orderDate,$requiredDate,$shippedDate,$status,$comments,$customerNumber){

		$sql = "update Orders set
				
					orderDate = '$orderDate',
					requiredDate = '$requiredDate',
					shippedDate = '$shippedDate',
					status = '$status',
					comments = '$comments',
					customerNumber = '$customerNumber'
					
				where orderNumber = '$orderNumber'";
		$this->_db->query($sql) or die('Error:'.$sql);
		
	}
	
	//Borrado lógico
	public function delOrder($orderNumber){
	
		$sql = "update Orders set active = 0 where orderNumber='$orderNumber'";
		$this->_db->query($sql) or die('Error: '. $sql);
		return;
		
	}
	
	
}

?>
	