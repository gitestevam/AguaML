<?php require '../config/constants.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>BEBER AGUA</title>
	<link rel="stylesheet" href="<?php echo CSS_URL . 'reset.css';?>"type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo CSS_URL . 'layout.css';?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo CSS_URL . 'style.css';?>" type="text/css" media="all">
	<script type="text/javascript" src="<?php echo JS_URL_URL . 'jquery-1.4.2.min.js';?>" ></script>
	<script src="<?php echo JS_URL_URL . 'rollover.js';?>" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo JS_URL_URL . 'script.js';?>"></script>
</head>	
<body id="page1">
	<header>
		<h1>Beber Água</h1>
	</header>

		<form action="<?php echo  '../controller/login/login.php';?>" id="lead" method="post">
			<h1>Efetuar Login</h1>
			<p>Login:<p>
			<input type="text" class="login" id="login" name="login">
			<p>Senha:</p>
			<input type="password" class="senha" id="senha" name="senha">
			<br/>
			<input type="submit" id="logar" name="logar" value="Entrar">
			<input type="button" onClick="document.location.href='cadastro.php'" value="Novo Usuário!">
		</form>	

<?php require 'master/master_rodape.php';?>