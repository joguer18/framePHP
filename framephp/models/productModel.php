<?php
class productModel extends Model {
	public function __construct() {
		parent::__construct ();
	}
	public function getAllProduct() {
		$sql = "SELECT productCode, productName, productLine, buyPrice, quantityInStock FROM Products
				where active = 1
				";
		
		$result = $this->_db->query ( $sql );
		
		return $result;
	}
	public function getProducto($productCode) {
		$sql = "select * from Products where productCode='$productCode'";
		$result = $this->_db->query ( $sql );
		if ($result->num_rows) {
			$reg = $result->fetch_object ();
		}
		else 
			$reg=null;
		
		return $reg;
	}
	
	public function updateProducto($productCode,$productName,$productLine,$productScale,$productVendor,$productDescription,$quantityInStock,$buyPrice,$MSRP){

		$sql = "update Products set
				
					productName = '$productName',
					productLine = '$productLine',
					productScale = '$productScale',
					productDescription = '$productDescription',
					productVendor = '$productVendor',
					buyPrice = '$buyPrice',
					quantityInStock = '$quantityInStock',
					MSRP = '$MSRP'
				where productCode = '$productCode'";
		$this->_db->query($sql) or die('Error:'.$sql);
		
	}
	
	//Creando un nuevo producto en base de datos
	public function insertProducto($productCode,$productName,$productLine,$productScale,$productVendor,$productDescription,$quantityInStock,$buyPrice,$MSRP){
		$sql=" insert into Products set
		productCode='$productCode',
		productName='$productName',
		productLine='$productLine',
		productScale ='$productScale',
		productVendor ='$productVendor',
		productDescription ='$productDescription',
		quantityInStock ='$quantityInStock',
		buyPrice ='$buyPrice',
		MSRP ='$MSRP'
			
		";
	
		$this->_db->query($sql) or die('Error:'. $sql);
				return;
	}
	
	//Borrado lógico
	public function delProducto($productCode){
	
		$sql = "update Products set active = 0 where productCode='$productCode'";
		$this->_db->query($sql) or die('Error: '. $sql);
		return;
		
	}
	
	
}

?>
	