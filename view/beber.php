<?php require 'master/master_topo.php';?>

		<form action="<?php echo BASE_URL . 'controller/beber/incluir.php';?>" id="lead" method="post">
			<h1>BEBER AGUA</h1>
			<p>Id:<p>
			<input type="text" class="id" id="id" name="id">
			<p>QUANTIDADE EM ML:<p>
			<input type="text" class="ml" id="ml" name="ml">
			<br/>
			<input type="submit" value="BEBER">
		</form>	

<?php require 'master/master_rodape.php';?>