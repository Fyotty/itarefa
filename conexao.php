<?php

	//ARQUIVO DE CONEXOA COM O BANCO DE DADOS

	date_default_timezone_set('America/Sao_Paulo');
	
			Class Conexao{
				protected $host = "192.168.1.135";
				protected $user = "postgres";
				protected $pswd = "_Oras!st3ms/";
				protected $dbname = "itarefa";
				protected $con = null;
				
				function __construct(){} //método construtor
				#método que inicia conexao
				function open(){
					$this->con = @pg_connect("host=$this->host user=$this->user password=$this->pswd dbname=$this->dbname");
					return $this->con;
				}
				#método que encerra a conexao
				function close(){
					@pg_close($this->con);
				}
				#método verifica status da conexao
				function statusCon(){
					if(!$this->con){ $sttcon = 0;}else{$sttcon = 1;}
				}
			}
			
?>

