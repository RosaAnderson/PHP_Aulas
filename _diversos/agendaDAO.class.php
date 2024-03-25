<?php
	class agendaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function buscar_todas_agendas()
		{
			$sql = "SELECT * FROM agenda";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao buscar as agendas";
			}
		}
	}//fim da classe
?>