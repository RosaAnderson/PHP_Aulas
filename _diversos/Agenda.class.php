<?php
	class Agenda
	{
		public function __construct(private int $idagenda = 0, private string $nome = ""){}
		
		public function getIdagenda()
		{
			return $this->idagenda;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
	}//fim da classe
?>