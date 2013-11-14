<?php

class ConexaoItarefa extends PDO {
	private $banco = 'pgsql:dbname=itarefa;host=186.225.148.162;port=5432;';
	private $usuario = 'postgres';
	private $senha = '_Oras!st3ms/';
	public static $handle = null;
	

	function __construct() {
		try {
			if ( self::$handle == null ) {
				$DadosConexao = parent::__construct($this->banco,$this->usuario,$this->senha);
				self::$handle = $DadosConexao;
				return self::$handle;
			}
		}
		catch ( PDOException $e ) {
			echo 'Não conseguimos efetuar a conexão com o banco de dados: <br />' . $e->getMessage();
			return false;
		}
	}

	function __destruct( ) {
		self::$handle = NULL;
	}
}
?>