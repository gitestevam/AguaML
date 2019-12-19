<?php require 'master/master_topo.php';?>

		<form action="<?php echo BASE_URL . 'controller/login/login.php';?>" id="lead" method="post">
			<h1>Efetuar Login</h1>
			<p>Login:<p>
			<input type="text" class="login" id="login" name="login">
			<p>Senha:</p>
			<input type="password" class="pass" id="pass" name="pass">
			<br/>
			<input type="submit" value="Entrar">
		</form>	

<?php require 'master/master_rodape.php';?>