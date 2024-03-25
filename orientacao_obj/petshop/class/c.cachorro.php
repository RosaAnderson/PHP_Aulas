<?php
	class Cachorro
	{
		public function __construct(private string	$Nome			= "",
		                            private string	$Cor			= "",
									private string	$Raca			= "",
									private string	$Nascimento		= "",
									private string	$Proprietario	= ""){}

		public function getNome()						{return $this -> Nome;}
		public function getCor()						{return $this -> Cor;}
		public function getRaca()						{return $this -> Raca;}
		public function getNascimento()					{return $this -> Nascimento;}
		public function getProprietario()				{return $this -> Proprietario;}

		public function setNome($Nome)					{$this -> Nome			= $;}		
		public function setCor($Cor)					{$this -> Cor			= $;}		
		public function setRaca($Raca)					{$this -> Raca			= $;}		
		public function setNascimento($Nascimento)		{$this -> Nascimento	= $;}		
		public function setProprietario($Proprietario)	{$this -> Proprietario	= $;}		
	}
?>