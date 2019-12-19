<?php
include_once 'modelbase.php';
include_once 'entity/funcionario.php';

class ModelFuncionario{
	
	public function inserir(Funcionario $funcionario){
		
		$nome=$funcionario->getNome();
		$foto=$funcionario->getFoto();
		$descricao=$funcionario->getDescricao();
		
		AbrirConexao();
		
		$query="insert into funcionario values(null, '$nome', '$foto', '$descricao')";
		
		mysql_query($query);
		$numLinha=mysql_affected_rows();
		
		fecharConexao();
		
		return $numLinha;
	}
}
?>