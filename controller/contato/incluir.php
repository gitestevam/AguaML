	<?php

include_once '../../model/entity/modelcadastrar.php';
include_once '../../config/constants.php';

	$post=$_POST;
	
	$cadastro=new Cadastro();
	$cadastro->setLogin($post['login']);
	$cadastro->setSenha($post['senha']);
	
	$modelcadastro=new ModelCadastrar();
	$retorno=$modelcadastro->inserir($cadastro);
	
	if ($retorno > 0){
		echo '<script>alert("Usuario Cadastrado!");</script>';
	}else{
		echo '<script>alert("FALHA: Tente novamente!");</script>';
	}
	
	echo '<script>window.location.href="'.BASE_URL.'view/inicial.php'.'";</script>';
	
?>	