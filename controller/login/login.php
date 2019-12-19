<?php
include_once '../../model/entity/modellogin.php';
include_once '../../config/constants.php';

	$post=$_POST;
	
	$login=$post['login'];
	$senha=$post['senha'];
	
	$modellogin=new ModelLogin();
	$resultado=$modellogin->EfetuaLogin($login, $senha);
	
	if (empty($resultado)){
		session_unset();
		echo '<script>alert("FALHA: Login ou Senha incorretos.");</script>';
		echo '<script>window.location.href="'.BASE_URL.'view/inicial.php' .'";</script>';
	}else{
		$_SESSION['logado']=$resultado['login'];
		echo '<script>alert("Login Efetuado com sucesso.");</script>';
		echo '<script>window.location.href="'.BASE_URL.'view/beber.php' .'";</script>';
	}
?>	