<?php
	class prestador
	{
		public function __construct(private int $idprestador = 0, private string $nome = "", private string $celular = "", private string $data = "", private string $horario = "", private string $descritivo = "", private string $prestadorservico = "", private array $agendas = array()){}
		
		public function getIdprestador()
		{
			return $this->idprestador;
		}
		public function getNome()
		{
			return $this->nome;
		}
		public function getCelular()
		{
			return $this->celular;
		}
        public function getData()
		{
			return $this->data;
		}
        public function getHorario()
		{
			return $this->horario;
		}
        public function getDescritivo()
		{
			return $this->descritivo;
		}
        public function getPrestadorservico()
		{
			return $this->prestadorservico;
		}
		public function getAgenda()
		{
			return $this->agendas;
		}
	}//fim da classe
?>