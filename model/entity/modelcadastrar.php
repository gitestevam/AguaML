<?php
include_once 'modelbase.php';
include_once 'cadastroUsuario.php';

class ModelCadastrar {
	
	public function inserir(Cadastro $cadastro){
	
		$login = $cadastro->getLogin();
		$senha = $cadastro->getSenha();
		
		AbrirConexao();
		
		$query = "insert into usuario values(null, '$login', '$senha')";
		
		mysql_query($query);
		$numLinha = mysql_affected_rows();
		
		FecharConexao();
		
		return $numLinha;
		}
		
	public function listarTodos(){
			AbrirConexao();
				$query="select * from usuario;";
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
					$cadastro->setLogin($row['login']);
					$cadastro->setSenha($row['senha']);
					$listaRetorno[]=$cadastro;
				}
			return $listaRetorno;
			
			}else{
				$erro='Não foram encontrados registros';
				return $erro;
			}
	}	
	public function excluir(Contato $cadastro){
		AbrirConexao();
			$query="delete from contato where id=". $cadastro->id .";";
			$grava=mysql_query($query);
			$numlinha=mysql_affected_rows();
		FecharConexao();

		return $numlinha;
	}
}
?>	