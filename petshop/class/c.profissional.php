<?php

	final class Profissional extends Pessoa
	{
		public function __construct(private string $CRMV = "",
		                                           $Nome,
												   $Telefone)
		{
			parent:: __construct($Nome, $Telefone);
		}

		public function getCRMV()		{return $this -> CRMV;}

		public function setCRMV($CRMV)	{$this -> CRMV = $CRMV;}		
	}
?>