<?php 

class indexController extends Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->_view->renderizar('login',true);
		
	}
	
	public function addusuario(){
		
		
		// limpieza de data que viene del formulario
		$idUser = trim(strtolower($_POST['idUser']));
		$firstName = trim(strtolower($_POST['firstName']));
		$lastName = trim(strtolower($_POST['lastName']));
		$email = trim(strtolower($_POST['email']));
		$pass1 = trim($_POST['pass1']);
		$pass2 = trim($_POST['pass2']);
		
		//compara los password
		
		if ($pass1==$pass2){
			  $objuser = $this->loadModel('user');
			  $objuser->addusuario($idUser,$firstName,$lastName,$email,$pass1);
		}
		
				
		$this->redireccionar('index/index');
		
	}
	
	public function login(){
		$idUser = trim(strtolower($_POST['idUser']));
		$pass =trim($_POST['pass']);
		
		$objuser = $this->loadModel('user');
		
		if ($objuser->existusuario($idUser,$pass)){
			$this->redireccionar('index/panel');
		}
		else 
			$this->redireccionar('index/index');
	}
	
	public function panel(){
		$this->_view->renderizar('index');
		
	}
	
	
	public function recovery(){
		//recepcion de datos del form
		$idUser = trim(strtolower($_POST['idUser']));
		$newPass ='1234';
		
		// consultas a la BD
		$objuser = $this->loadModel('user');
		$email =$objuser->getEmail($idUser);
		$objuser->updatePass($idUser,$newPass);
		
		if ($email!=''){
			$mensaje = "Se realizo cambnio de contraseña \r\nUsuario : $idUser\r\nPassword: $newPass";
			mail($email, 'Cambio de Contraseña', $mensaje);
		}
		
		$this->redireccionar('index/index');
	}
	
	//Borrado lógico
	public function borrar($productCode){
		$this->_view->renderizar('index');
	
	}
	
}


?>



























