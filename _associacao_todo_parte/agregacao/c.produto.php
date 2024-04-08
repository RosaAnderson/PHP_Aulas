<?php

	// 
	class produto
	{
		// contrutor
		public function __construct(private string	$nome		= '',
								    private string	$descricao	= '',
								    private float 	$preco		= 0.00){}
	
		// gets
		public function getNome()		{return $this -> nome;		}
		public function getDescricao() 	{return $this -> descricao;	}
		public function getPreco()  	{return $this -> preco;		}

		// sets
		public function setNome($nome)				{$this -> nome			= $nome; 		}
		public function setDescricao($descricao) 	{$this -> descricao		= $descricao;	}
		public function setPreco($preco)  			{$this -> preco			= $preco;		}
		
		// metodo
		public function entrada($preco)
		{
			//
		}

		public function retirada($preco)
		{			
			//
		}	
	}
?>