<?php
	class prestadorDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($prestador)
		{
			$sql = "INSERT INTO cliente (nome, celular, data, horario, descritivo, prestadorservico) VALUES(?,?,?,?,?,?)";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $prestador->getNome());
				$stm->bindValue(2, $prestador->getCelular());
                $stm->bindValue(3, $prestador->getData());
                $stm->bindValue(4, $prestador->getHorario());
                $stm->bindValue(5, $prestador->getDescritivo());
                $stm->bindValue(6, $prestador->getPrestadorservico());
				$stm->execute();
				$this->db = null;
				return "prestador Inserido com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao inserir um prestador";
			}
		}
		function buscar_prestador_por_agenda($prestador)
		{
			$sql = "SELECT f.*, r.nome as agenda FROM prestador as f, agenda as r, prestador_agenda as fr WHERE f.idprestador = fr.prestador_idprestador AND r.idagenda = fr.agenda_idagenda AND fr.agenda_idagenda = ?";
			
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $prestador->getAgenda()[0]->getIdagenda());
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao buscar prestador de uma determinado agenda";
			}
		}
	}//fim da classe