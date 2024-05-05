<?php 
class usuarios
{
	private $id_usuario;
	private $nombre_usuario;
	private $email;
	private $documento;
	private $password;

	
	public function setIdusuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

	public function getIdusuario(){
		return $this->id_usuario;
	}

	public function setNombre($nombre_usuario){
		$this->nombre_usuario = $nombre_usuario;
	}

	public function getNombre(){
		return $this->nombre_usuario;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setDocumento($documento){
		$this->documento = $documento;
	}

	public function getDocumento(){
		return $this->documento;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getPassword(){
		return $this->password;
	}


}

 ?>