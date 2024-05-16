<?php
	class CategoriaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
				
		public function inserir($categoria)
		{
			$sql = "INSERT INTO categorias (descritivo) VALUES(?)";
			//preparar frase
			$stm = $this->db->prepare($sql);
			//substituir o ponto de interrogação
			$stm->bindValue(1, $categoria->getDescritivo());
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
		}
		
		public function alterar()
		{
		}
		
		public function excluir($categoria)
		{
			$sql = "DELETE FROM categorias WHERE idcategoria = ?";
			
			//preparar frase
			$stm = $this->db->prepare($sql);
			//substituir o ponto de interrogação
			$stm->bindValue(1, $categoria->getIdcategoria());
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			
		}
		 
		public function buscar_todas()
		{
			//frase sql que será executada
			$sql = "SELECT * FROM categorias";
			//preparar frase
			$stm = $this->db->prepare($sql);
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			//retornar o resultado da execução da frase sql
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
	}
?>