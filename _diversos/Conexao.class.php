<?php
	class Conexao
	{
		protected $db;
		
		public function __construct()
		{
			$parametros = "mysql:host=localhost;dbname=prestador;charset=utf8mb4";
			try
			{
				$this->db = new PDO($parametros, "root", "");
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				//echo "Problema na conexão";
				die();
			}
			
		}//construtor
	}//classe
?>