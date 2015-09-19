<?php 


class employeeController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$objemployee = $this->loadModel('employee');
		
		$this->_view->employees = $objemployee->getAllEmployee();
		
		$this->_view->setJs(array('index'));
		$this->_view->renderizar('index');

	}

	public function editar($employeeCode){
		
		$objemployee = $this->loadModel('employee');
		$this->_view->employee = $objemployee->getEmployee($employeeCode);
		
		$this->_view->renderizar('editar');
		
		
	}
	
	public function grabaremployee(){
	
		$employeeNumber = trim($_POST['employeeNumber']);
		$lastName = trim($_POST['lastName']);
		$firstName = trim($_POST['firstName']);
		$extension = trim($_POST['extension']);
		$email = trim($_POST['email']);
		$officeCode = trim($_POST['officeCode']);
		$reportsTo = trim($_POST['reportsTo']);
		$jobTitle = trim($_POST['jobTitle']);
	
		$objemployee = $this->loadModel('employee');
	
		$objemployee->updateEmployee($employeeNumber,$lastName,$firstName,$extension,$email,$officeCode,$reportsTo,$jobTitle);
		$this->redireccionar('employee/index');
	
	}
	
	//Borrado lógico
	public function borrar($employeeCode){
		
		$objemployee = $this->loadModel('employee');
		$objemployee->delEmployee($employeeCode);
	
		$this->redireccionar('employee/index');
	
	
	}
	
	

}


?>