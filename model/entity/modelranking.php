<?php
include_once 'modelbase.php';

function mostraUltimo(){
		
		AbrirConexao();
		
			$query='SELECT * FROM tb_quantidade
				ORDER BY id ASC limit 5';
				
				$result=mysql_query($query);
				
		FecharConexao();
		//$result=mysql_query($query);
				
		$registro=mysql_fetch_array($result);
				
			$nome=$registro['nome'];
			$idade=$registro['idade'];
			
				
			$retorno=('A pessoa q venceu foi ' .$nome.);
			return $retorno;
	}
?>

<html>
	<body>
		<form action='beber.php'>
		<h1>Rankig dos maiores bebedores de agua<h1>
		<h4>
		<?php echo mostraUltimo() ;?>
		<h4>
		<button type="submit"> Pagina de quantidade</button>
	</body>
</html>		
