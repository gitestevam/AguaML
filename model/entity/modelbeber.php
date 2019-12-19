<?php
include_once 'modelbase.php';
include_once 'cadastroBeber.php';

class ModelBeber {
	
	public function inserir(Beber $bebe){
		
		$id = $bebe->getId();
		$ml = $bebe->getQtd();

		AbrirConexao();
		//faz o select no banco para verificar se o id procurado existe e salva o resultado na variavel $query
		$query="select * from quantidade where id = '$id'";	
		$executa=mysql_query($query);
		//verifica se a variavel $query está vazia
		if(empty($executa)){
			//insere o id do usuario e quantidade de agua que ele bebeu, no banco de dados
			$query2 = "insert into quantidade values(null, '$id', '$ml')";
			mysql_query($query2);
			//atualiza a variavel $numLinha com a quantidade de linhas afetadas no banco
			$numLinha = mysql_affected_rows();
		}else{
			//busca a quantidade de agua no banco de dados
			$query3 = "SELECT ml FROM quantidade WHERE id = '$id'";
			$atual=mysql_query($query3);
			//soma a quatidade de agua com a quandidade bebida($ml) e salva na variavel $atual
			$atual = $atual + $ml;
			//atualiza o banco com a quantidade de agua atual
			$query4 = "UPDATE quantidade SET ml = '$atual' WHERE id =".$id.";";
			mysql_query($query4);
			//atualiza a variavel $numLinha com a quantidade de linhas afetadas no banco
			$numLinha = mysql_affected_rows();
		}
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