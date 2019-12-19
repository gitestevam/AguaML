<?php
include_once 'modelbase.php';

class ModelLogin{
	
	public function EfetuaLogin($login, $senha){
		AbrirConexao();
		$query="select * from usuario where login='".$login."' and senha='".$senha."';";
		$executa=mysql_query($query);
		if(empty($executa)){
			$resultado="";
		}else{
			$resultado=mysql_fetch_assoc($executa);
		}

		FecharConexao();
		
		return $resultado;
	}
}
?>