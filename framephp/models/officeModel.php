<?php
class officeModel extends Model {
	public function __construct() {
		parent::__construct ();
	}
public function getAllOffice() {
		$sql = "SELECT officeCode, city, phone, addressLine1, addressLine2, state, country, postalCode, territory FROM Offices
				where active = 1
				";
		// Para el borrado lógico:
		// where active = 1
		$result = $this->_db->query ( $sql );
		
		return $result;
	}
	public function getOffice($officeCode) {
		$sql = "select * from Offices where officeCode='$officeCode'";
		$result = $this->_db->query ( $sql );
		if ($result->num_rows) {
			$reg = $result->fetch_object ();
		}
		else 
			$reg=null;
		
		return $reg;
	}
	
	public function updateOffice($officeCode,$city,$phone,$addressLine1,$addressLine2,$state,$country,$postalCode,$territory){

		$sql = "update Offices set
				
					city = '$city',
					phone = '$phone',
					addressLine1 = '$addressLine1',
					addressLine2 = '$addressLine2',
					state = '$state',
					country = '$country',
					postalCode = '$postalCode',
					territory = '$territory'
				where officeCode = '$officeCode'";
		$this->_db->query($sql) or die('Error:'.$sql);
		
	}
	
	//Borrado lógico
	public function delOffice($officeCode){
	
		$sql = "update Offices set active = 0 where officeCode='$officeCode'";
		$this->_db->query($sql) or die('Error: '. $sql);
		return;
		
	}
	
	
}

?>
	