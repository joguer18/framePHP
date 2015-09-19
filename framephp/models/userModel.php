<?php 
Class userModel extends Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	
	public function addusuario($idUser,$firstName,$lastName,$email,$pass){
		$sql=" insert into Users set
					idUser='$idUser',
					firstName='$firstName',
					lastName='$lastName',
					email ='$email',
					pass =sha1('$pass'),
					dateReg = now()
					
		";
		
			
		$this->_db->query($sql) or die('Error:'. $sql);
		return;		
	}
	
	public function existusuario($idUser,$pass){
		
		$sql="select idUser  from Users where idUser='$idUser' and pass=sha1('$pass')";
		$result = $this->_db->query($sql);
		
		if ($result->num_rows) return true;
		else
			 return false;
	}
	
	
	public function getEmail($idUser){
		$email='';
		$sql="select email from Users where idUser='$idUser'";
		$result = $this->_db->query($sql);
		if ($result->num_rows) {
			
			$reg=$result->fetch->object();
			$email = $reg->email;
		}
		
		return $email;
	}
	
	public function updatePass($idUser,$newPass){
		
		$sql ="update Users set pass=sha1('$newPass') where idUser='$idUser'";
		$this->_db->query($sql);
		return;
	}
	
	
}

?>

















