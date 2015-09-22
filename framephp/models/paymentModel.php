<?php
class paymentModel extends Model {
	public function __construct() {
		parent::__construct ();
	}
public function getAllPayment() {
		$sql = "SELECT customerNumber, checkNumber, paymentDate, amount FROM Payments
				where active = 1
				";
		// Para el borrado lógico:
		// where active = 1
		$result = $this->_db->query ( $sql );
		
		return $result;
	}
	public function getPayment($paymentCode) {
		$sql = "select * from Payments where customerNumber='$paymentCode'";
		$result = $this->_db->query ( $sql );
		if ($result->num_rows) {
			$reg = $result->fetch_object ();
		}
		else 
			$reg=null;
		
		return $reg;
	}
	
	public function updatePayment($customerNumber,$checkNumber,$paymentDate,$amount){

		$sql = "update Payments set
				
					checkNumber = '$checkNumber',
					paymentDate = '$paymentDate',
					amount = '$amount'
					where customerNumber = '$customerNumber'";
		$this->_db->query($sql) or die('Error:'.$sql);
		
	}
	
	//Borrado lógico
	public function delPayment($customerNumber){
	
		$sql = "update Payments set active = 0 where customerNumber='$customerNumber'";
		$this->_db->query($sql) or die('Error: '. $sql);
		return;
		
	}
	
	
}

?>
	