<?php
	class clienteDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($cliente)
		{
			$sql = "INSERT INTO cliente (nome, celular, data, horario, descritivo, prestadorservico) VALUES(?,?,?,?,?,?)";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $cliente->getNome());
				$stm->bindValue(2, $cliente->getCelular());
                $stm->bindValue(3, $cliente->getData());
                $stm->bindValue(4, $cliente->getHorario());
                $stm->bindValue(5, $cliente->getDescritivo());
                $stm->bindValue(6, $cliente->getPrestadorservico());
				$stm->execute();
				$this->db = null;
				return "cliente Inserido com sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao inserir uma cliente";
			}
		}
		function buscar_clientes_por_agenda($cliente)
		{
			$sql = "SELECT f.*, r.nome as agenda FROM cliente as f, agenda as r, cliente_agenda as fr WHERE f.idcliente = fr.cliente_idcliente AND r.idagenda = fr.agenda_idagenda AND fr.agenda_idagenda = ?";
			
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $cliente->getAgenda()[0]->getIdagenda());
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao buscar clientes de uma determinado agenda";
			}
		}
	}//fim da classe