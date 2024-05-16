<?php
	class Categoria
	{
		public function __construct(private int		$idcategoria	= 0,
									private string	$descritivo		= ""){}
		
		public function getIdcategoria()	{return $this -> idcategoria;}
		public function getDescritivo()		{return $this -> descritivo;}
	}
?>