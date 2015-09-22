<?php 


class userController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$objuser = $this->loadModel('user');
		
		$this->_view->users = $objuser->getAllUser();
		
		$this->_view->setJs(array('index'));
		$this->_view->renderizar('index');

	}

	public function editar($userCode){
		
		$objuser = $this->loadModel('user');
		$this->_view->user = $objuser->getUser($userCode);
		
		$this->_view->renderizar('editar');
		
		
	}
	
	public function grabaruser(){
	
		$idUser = trim($_POST['idUser']);
		$firstName = trim($_POST['firstName']);
		$lastName = trim($_POST['lastName']);
		$email = trim($_POST['email']);
		$dateReg = trim($_POST['dateReg']);
		$dateMod = trim($_POST['dateMod']);
	
		$objuser = $this->loadModel('user');
	
		$objuser->updateUser($idUser,$firstName,$lastName,$email,$dateReg,$dateMod);
		$this->redireccionar('user/index');
	
	}
	
	//Borrado lógico
	public function borrar($userCode){
		
		$objuser = $this->loadModel('user');
		$objuser->delUser($userCode);
	
		$this->redireccionar('user/index');
	
	}
	
	

}


?>