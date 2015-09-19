<?php
class customerModel extends Model {
	public function __construct() {
		parent::__construct ();
	}
public function getAllCustomer() {
		$sql = "SELECT customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit FROM Customers
				where active = 1
				";
		// Para el borrado lógico:
		// where active = 1
		$result = $this->_db->query ( $sql );
		
		return $result;
	}
	public function getCustomer($customerCode) {
		$sql = "select * from Customers where customerNumber='$customerCode'";
		$result = $this->_db->query ( $sql );
		if ($result->num_rows) {
			$reg = $result->fetch_object ();
		}
		else 
			$reg=null;
		
		return $reg;
	}
	
	public function updateCustomer($customerNumber,$customerName,$contactLastName,$contactFirstName,$phone,$addressLine1,$addressLine2,$city,$state,$postalCode,$country,$salesRepEmployeeNumber,$creditLimit){

		$sql = "update Customers set
				
					customerName = '$customerName',
					contactLastName = '$contactLastName',
					contactFirstName = '$contactFirstName',
					phone = '$phone',
					addressLine1 = '$addressLine1',
					addressLine2 = '$addressLine2',
					city = '$city',
					state = '$state',
					postalCode = '$postalCode',
					country = '$country',
					salesRepEmployeeNumber = '$salesRepEmployeeNumber',
					creditLimit = '$creditLimit'
				where customerNumber = '$customerNumber'";
		$this->_db->query($sql) or die('Error:'.$sql);
		
	}
	
	//Borrado lógico
	public function delCustomer($customerNumber){
	
		$sql = "update Customers set active = 0 where customerNumber='$customerNumber'";
		$this->_db->query($sql) or die('Error: '. $sql);
		return;
		
	}
	
	
}

?>
	