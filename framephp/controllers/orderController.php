<?php 


class orderController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$objorder = $this->loadModel('order');
		
		$this->_view->orders = $objorder->getAllOrder();
		
		$this->_view->setJs(array('index'));
		$this->_view->renderizar('index');

	}

	public function editar($orderCode){
		
		$objorder = $this->loadModel('order');
		$this->_view->order = $objorder->getOrder($orderCode);
		
		$this->_view->renderizar('editar');
		
		
	}
	
	public function grabarorder(){
	
		$orderNumber = trim($_POST['orderNumber']);
		$orderDate = trim($_POST['orderDate']);
		$requiredDate = trim($_POST['requiredDate']);
		$shippedDate = trim($_POST['shippedDate']);
		$status = trim($_POST['status']);
		$comments = trim($_POST['comments']);
		$customerNumber = trim($_POST['customerNumber']);
	
		$objorder = $this->loadModel('order');
	
		$objorder->updateOrder($orderNumber,$orderDate,$requiredDate,$shippedDate,$status,$comments,$customerNumber);
		$this->redireccionar('order/index');
	
	}
	
	//Borrado lógico
	public function borrar($orderCode){
		
		$objorder = $this->loadModel('order');
		$objorder->delOrder($orderCode);
	
		$this->redireccionar('order/index');
	
	
	}
	
	

}


?>