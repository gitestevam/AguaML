<?php
class Cadastro{
	
	public $id;
	public $ml;
	public $data;
	
	public function setId($id){
		$this->id=$id;
	}

	public function getId(){
		return $this->id;
	}

	public function setMl($ml){
		$this->ml=$ml;
	}
	
	public function getMl(){
		return $this->ml;
	}
	
	public function setData($data){
		$this->data=$data;
	}
	
	public function getData(){
		return $this->data;
	}
}
?>