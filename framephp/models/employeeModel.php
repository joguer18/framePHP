<?php
class employeeModel extends Model {
	public function __construct() {
		parent::__construct ();
	}
public function getAllEmployee() {
		$sql = "SELECT employeeNumber, lastName, firstName, extension, email, officeCode, reportsTo, jobTitle FROM Employees
				where active = 1
				";
		// Para el borrado lógico:
		// where active = 1
		$result = $this->_db->query ( $sql );
		
		return $result;
	}
	public function getEmployee($employeeCode) {
		$sql = "select * from Employees where employeeNumber='$employeeCode'";
		$result = $this->_db->query ( $sql );
		if ($result->num_rows) {
			$reg = $result->fetch_object ();
		}
		else 
			$reg=null;
		
		return $reg;
	}
	
	public function updateEmployee($employeeNumber,$lastName,$firstName,$extension,$email,$officeCode,$reportsTo,$jobTitle){

		$sql = "update Employees set
				
					firstName = '$firstName',
					lastName = '$lastName',
					extension = '$extension',
					email = '$email',
					officeCode = '$officeCode',
					reportsTo = '$reportsTo',
					jobTitle = '$jobTitle'
				where employeeNumber = '$employeeNumber'";
		$this->_db->query($sql) or die('Error:'.$sql);
		
	}
	
	//Borrado lógico
	public function delEmployee($employeeNumber){
	
		$sql = "update Employees set active = 0 where employeeNumber='$employeeNumber'";
		$this->_db->query($sql) or die('Error: '. $sql);
		return;
		
	}
	
	
}

?>
	