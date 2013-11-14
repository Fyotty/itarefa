<?php
	class ConexaoItarefa {
		private $dbname     = "itarefa";
		private $host       = "192.168.1.135";
		private $user       = "postgres";
		private $password   = "_Oras!st3ms/";
		private $port       = 5432;
		private $DBH;
		
		public function __construct() {
			try {
				$this->DBH  = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->password");
			} catch(PDOException $e) {
				echo    $e->getMessage();  
			}
		
		}
		public function disconnect() {
			$this->DBH  = null; 
		}	
	}

?>
