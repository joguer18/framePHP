<?php
class orderdetailModel extends Model {
	public function __construct() {
		parent::__construct ();
	}
public function getAllOrderdetail() {
		$sql = "SELECT orderNumber, productCode, quantityOrdered, priceEach, orderLineNumber FROM OrderDetails
				where active = 1
				";
		// Para el borrado lógico:
		// where active = 1
		$result = $this->_db->query ( $sql );
		
		return $result;
	}
	public function getOrderdetail($orderdetailCode) {
		$sql = "select * from OrderDetails where orderNumber='$orderdetailCode'";
		$result = $this->_db->query ( $sql );
		if ($result->num_rows) {
			$reg = $result->fetch_object ();
		}
		else 
			$reg=null;
		
		return $reg;
	}
	
	public function updateOrderdetail($orderNumber,$productCode,$quantityOrdered,$priceEach,$orderLineNumber){

		$sql = "update OrderDetails set
				
					productCode = '$productCode',
					quantityOrdered = '$quantityOrdered',
					priceEach = '$priceEach',
					orderLineNumber = '$orderLineNumber'
					
				where orderNumber = '$orderNumber'";
		$this->_db->query($sql) or die('Error:'.$sql);
		
	}
	
	//Borrado lógico
	public function delOrderdetail($orderdetailNumber){
	
		$sql = "update OrderDetails set active = 0 where orderNumber='$orderdetailNumber'";
		$this->_db->query($sql) or die('Error: '. $sql);
		return;
		
	}
	
	
}

?>
	