<?php
require_once('../../conexao.php');

	$MinhaConexao = new Conexao();
	$Query = "insert into cidades (nome,uf) values ('".$_POST['nome']."','".$_POST['uf']."');";
	$Result = pg_query($MinhaConexao->open(), $Query);
	
?>