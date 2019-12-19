<?php
class Beber{
	
	public $id;
	public $qtd;
	//public $data;
	
	public function setId($id){
		$this->id=$id;
	}

	public function getId(){
		return $this->id;
	}

	public function setQtd($qtd){
		$this->qtd=$qtd;
	}
	
	public function getQtd(){
		return $this->qtd;
	}
	
	/*public function setData($data){
		$this->data=$data;
	}
	
	public function getData(){
		return $this->data;
	}*/
}
?>