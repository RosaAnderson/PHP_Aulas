<?php
	class Cachorro
	{
		public function __construct(private string	$Data		= "",
									private array	$Servico	= array()
									private array	$Cachorro	= array()){}

		public function getData()				{return $this -> Datas;}
		public function getServico()			{return $this -> Servico;}
		public function getCachorro()			{return $this -> Cachorro;}

		public function setData($Data)			{$this -> Nome			= $;}		
		public function setServico($Servico)	{$this -> Servico[]		= $;}		
		public function setCachorro($Cachorro)	{$this -> Cachorro[]	= $;}		
	}
?>