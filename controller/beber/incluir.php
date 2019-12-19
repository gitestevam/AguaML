<?php

include_once '../../model/entity/modelbeber.php';
include_once '../../config/constants.php';

	$post=$_POST;
	
	$bebe=new Beber();
	$bebe->setId($post['id']);
	$bebe->setMl($post['ml']);

	$modelbeber=new ModelBeber();
	$retorno=$modelbeber->inserir($bebe);
	
	if ($retorno > 0){
		echo '<script>alert("Quantidade lançada!");</script>';
	}else{
		echo '<script>alert("FALHA: Tente novamente!");</script>';
	}
	
	echo '<script>window.location.href="'.BASE_URL.'view/beber.php'.'";</script>';
	
?>	