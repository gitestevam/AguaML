<?php
class Cadastro{
	
	public $id;
	public $login;
	public $senha;
	
	public function setId($id){
		$this->id=$id;
	}

	public function getId(){
		return $this->id;
	}

	public function setLogin($login){
		$this->login=$login;
	}
	
	public function getLogin(){
		return $this->login;
	}
	
	public function setSenha($senha){
		$this->senha=$senha;
	}
	
	public function getSenha(){
		return $this->senha;
	}
}
?>