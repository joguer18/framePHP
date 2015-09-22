<?php 


class orderdetailController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$objorderdetail = $this->loadModel('orderdetail');
		
		$this->_view->orderdetails = $objorderdetail->getAllOrderdetail();
		
		$this->_view->setJs(array('index'));
		$this->_view->renderizar('index');

	}

	public function editar($orderdetailCode){
		
		$objorderdetail = $this->loadModel('orderdetail');
		$this->_view->orderdetail = $objorderdetail->getOrderdetail($orderdetailCode);
		
		$this->_view->renderizar('editar');
		
		
	}
	
	public function grabarorderdetail(){
	
		$orderNumber = trim($_POST['orderNumber']);
		$productCode = trim($_POST['productCode']);
		$quantityOrdered = trim($_POST['quantityOrdered']);
		$priceEach = trim($_POST['priceEach']);
		$orderLineNumber = trim($_POST['orderLineNumber']);
	
		$objorderdetail = $this->loadModel('orderdetail');
	
		$objorderdetail->updateOrderdetail($orderNumber,$productCode,$quantityOrdered,$priceEach,$orderLineNumber);
		$this->redireccionar('orderdetail/index');
	
	}
	
	//Borrado lógico
	public function borrar($orderdetailCode){
		
		$objorderdetail = $this->loadModel('orderdetail');
		$objorderdetail->delOrderdetail($orderdetailCode);
	
		$this->redireccionar('orderdetail/index');
	
	
	}
	
	

}


?>