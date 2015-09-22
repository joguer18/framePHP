<?php 


class officeController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$objoffice = $this->loadModel('office');
		
		$this->_view->offices = $objoffice->getAllOffice();
		
		$this->_view->setJs(array('index'));
		$this->_view->renderizar('index');

	}

	public function editar($officeCode){
		
		$objoffice = $this->loadModel('office');
		$this->_view->office = $objoffice->getoffice($officeCode);
		
		$this->_view->renderizar('editar');
		
		
	}
	
	public function grabaroffice(){
	
		$officeCode = trim($_POST['officeCode']);
		$city = trim($_POST['city']);
		$phone = trim($_POST['phone']);
		$addressLine1 = trim($_POST['addressLine1']);
		$addressLine2 = trim($_POST['addressLine2']);
		$state = trim($_POST['state']);
		$country = trim($_POST['country']);
		$postalCode = trim($_POST['postalCode']);
		$territory = trim($_POST['territory']);
	
		$objoffice = $this->loadModel('office');
	
		$objoffice->updateOffice($officeCode,$city,$phone,$addressLine1,$addressLine2,$state,$country,$postalCode,$territory);
		$this->redireccionar('office/index');
	
	}
	
	//Borrado lógico
	public function borrar($officeCode){
		
		$objoffice = $this->loadModel('office');
		$objoffice->delOffice($officeCode);
	
		$this->redireccionar('office/index');
	
	
	}
	
	

}


?>