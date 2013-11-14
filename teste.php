<?php

require_once('conexaob.php');
$Conexao = new ConexaoItarefa();

$Cidades = $Conexao->query("SELECT id, nome, uf FROM cidades");

	if($Cidades){
		//percorre os resultados via o fetch()
		while ($linha = $Cidades->fetch(PDO::FETCH_OBJ)){
			echo $linha->nome." - ".$linha->uf."<br />";
		}
 
	}
	//fecha a conexão
	$Conexao = NULL;
?>