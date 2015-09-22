<?php 


class paymentController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$objpayment = $this->loadModel('payment');
		
		$this->_view->payments = $objpayment->getAllPayment();
		
		$this->_view->setJs(array('index'));
		$this->_view->renderizar('index');

	}

	public function editar($paymentCode){
		
		$objpayment = $this->loadModel('payment');
		$this->_view->payment = $objpayment->getPayment($paymentCode);
		
		$this->_view->renderizar('editar');
		
		
	}
	
	public function grabarpayment(){
	
		$customerNumber = trim($_POST['customerNumber']);
		$checkNumber = trim($_POST['checkNumber']);
		$paymentDate = trim($_POST['paymentDate']);
		$amount = trim($_POST['amount']);
	
		$objpayment = $this->loadModel('payment');
	
		$objpayment->updatePayment($customerNumber,$checkNumber,$paymentDate,$amount);
		$this->redireccionar('payment/index');
	
	}
	
	//Borrado lógico
	public function borrar($paymentCode){
		
		$objpayment = $this->loadModel('payment');
		$objpayment->delPayment($paymentCode);
	
		$this->redireccionar('payment/index');
	
	
	}
	
	

}


?>