<?php require 'master/master_topo.php';?>

<?php
	include '../model/entity/modelbase.php';
	include '../model/entity/modelbeber.php';
		
	function listarTodos(){
			AbrirConexao();
				$query="select * from quantidade;";
				$executa=mysql_query($query);
				while($row=mysql_fetch_assoc($executa)){
					$resultado[]=$row;
					
				}
			FecharConexao();

			if(isset($resultado)){
				$listaRetorno=array();
				foreach($resultado as $row){
					$cadastro=new Cadastro();
					$cadastro->setId($row['id']);
					$cadastro->setMl($row['ml']);
					$cadastro->setData($row['data']);
					$listaRetorno[]=$cadastro;
				}
			return $listaRetorno;
			
			}else{
				$erro='Não foram encontrados registros';
				return $erro;
			}
	}
?>

<html>
	<body>
		<form action='beber.php'>
		<h1>Rankig dos maiores bebedores de agua<h1>
		<h4>
		<?php echo listarTodos() ;?>
		<h4>
		<input type="submit" value="Pagina de quantidade">
	</body>
</html>	


<?php require 'master/master_rodape.php';?>