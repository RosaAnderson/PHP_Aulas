<?php
	class ProdutoDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
				
		public function inserir($produto)
		{
			$sql = "INSERT INTO produtos (descritivo) VALUES (?)";
			//preparar frase
			$stm = $this->db->prepare($sql);
			//substituir o ponto de interrogação
			$stm->bindValue(1, $produto->getDescritivo());
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
		}
		
		public function alterar($produto)
		{
			$sql = "UPDATE produtos SET descritivo = ? WHERE idproduto = ?";
			
			//preparar frase
			$stm = $this -> db -> prepare($sql);
			
			//substituir o ponto de interrogação
			$stm -> bindValue(1, $produto -> getDescritivo());
			
			$stm -> bindValue(2, $produto -> getIdproduto());
			
			//executar a frase sql
			$stm -> execute();
			
			//fechar a conexão
			$this -> db = null;
		}
		
		public function excluir($produto)
		{
			$sql = "DELETE FROM produtos WHERE idproduto = ?";
			
			//preparar frase
			$stm = $this->db->prepare($sql);
			//substituir o ponto de interrogação
			$stm->bindValue(1, $produto->getIdproduto());
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			
		}
		 
		public function buscar_todos()
		{
			//frase sql que será executada
			$sql = "SELECT p.*, c.descritivo
			          FROM produtos p 
			          JOIN categorias c ON (p.idproduto = c.idcategoria)";
			//preparar frase
			$stm = $this->db->prepare($sql);
			//executar a frase sql
			$stm->execute();
			//fechar a conexão
			$this->db = null;
			//retornar o resultado da execução da frase sql
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		
		public function buscar_um_produto($produto)
		{
			$sql = 'SELECT * FROM produtos WHERE idproduto = ?';
			
			$stm = $this -> db -> prepare($sql);
			
			$stm -> bindValue(1, $produto -> getIdproduto());
			
			$stm -> execute();
			
			$this -> db = null;
			
			return $stm -> fetchAll(PDO::FETCH_OBJ);
		}
	}
?>