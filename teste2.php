
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inserir registro na tabela:: cidades</title>
</head>

<body>

<?php
	//ARQUIVO DE CONEXAO INSERIDO NA PÁGINA
	require_once('conexaob.php');
	
	$nome = 'São João das Duas Pontes '.rand(1,9999);
	$uf = 'SP';
	$Conexao = new ConexaoItarefa();
	$InseriCidade = $Conexao->prepare("insert into cidades (nome, uf) values (?,?)");
	$InseriCidade->bindParam(1, $nome, PDO::PARAM_STR);
	$InseriCidade->bindParam(2, $uf, PDO::PARAM_STR);
	$InseriCidade->execute();
	if($InseriCidade){
		echo 'Cidade cadastrada com sucesso!';
	}
	$Conexao = NULL;

?>
</body>
</html>