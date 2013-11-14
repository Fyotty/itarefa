<?php
//CHAMA O ARQUIVO DE CONEXÃO
require_once("conexao.php");
//DEFINE QUAL O CHARSET QUE USAREMOS NA PÁGINA
header('Content-Type: text/html; charset=iso-8859-1');
//ESSE É UM PARAMETRO DO PHP PRA NÃO APARECER PRO USUÁRIOS OS ERROS QUE PODEM OCORRER
ini_set('display_errors','off');

	//QUERY QUE SERÁ EXECUTADA
	$SQLPerguntas = "select c.nome, c.uf from cidades c";
	
	//AQUI ABRO A MINHA CONEXÃO		
	$MinhaConexao = new Conexao();
	//EXECUÇÃO DA QUERY (PG_QUERY)
	$QueryPerguntas = pg_query($MinhaConexao->open(),$SQLPerguntas);
		while($Perguntas = pg_fetch_array($QueryPerguntas)){
			echo $Perguntas['nome']." - ".$Perguntas['uf']."<br />";
		}
										
?>