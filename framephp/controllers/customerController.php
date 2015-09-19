<?php 


class customerController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$objcustomer = $this->loadModel('customer');
		
		$this->_view->customers = $objcustomer->getAllCustomer();
		
		$this->_view->setJs(array('index'));
		$this->_view->renderizar('index');

	}

	public function editar($customerCode){
		
		$objcustomer = $this->loadModel('customer');
		$this->_view->customer = $objcustomer->getCustomer($customerCode);
		
		$this->_view->renderizar('editar');
		
		
	}
	
	public function grabarcustomer(){
	
		$customerNumber = trim($_POST['customerNumber']);
		$customerName = trim($_POST['customerName']);
		$contactLastName = trim($_POST['contactLastName']);
		$contactFirstName = trim($_POST['contactFirstName']);
		$phone = trim($_POST['phone']);
		$addressLine1 = trim($_POST['addressLine1']);
		$addressLine2 = trim($_POST['addressLine2']);
		$city = trim($_POST['city']);
		$state = trim($_POST['state']);
		$postalCode = trim($_POST['postalCode']);
		$country = trim($_POST['country']);
		$salesRepEmployeeNumber = trim($_POST['salesRepEmployeeNumber']);
		$creditLimit = trim($_POST['creditLimit']);
	
		$objcustomer = $this->loadModel('customer');
	
		$objcustomer->updateCustomer($customerNumber,$customerName,$contactLastName,$contactFirstName,$phone,$addressLine1,$addressLine2,$city,$state,$postalCode,$country,$salesRepEmployeeNumber,$creditLimit);
		$this->redireccionar('customer/index');
	
	}
	
	//Borrado lógico
	public function borrar($customerCode){
		
		$objcustomer = $this->loadModel('customer');
		$objcustomer->delCustomer($customerCode);
	
		$this->redireccionar('customer/index');
	
	
	}
	
	

}


?>