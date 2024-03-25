<?php
	require_once "../models/conexao.class.php";
	require_once "../models/clienteDAO.class.php";
	require_once "../models/cliente.class.php";
	require_once "../models/agendaDAO.class.php";
	
	
	
	class clienteRest
	{
		public function buscar_agendas()
		{
			$agendaDAO = new agendaDAO();
			$retorno = $agendaDAO->buscar_todas_agendas();
			return json_encode($retorno);
		}
		
		public function inserir_cliente($nome, $celular, $data, $horario, $descritivo, $prestadorservico)
		{
			
				$cliente = new Cliente(nome:$nome, celular:$celular, data:$data, horario:$horario, descritivo:$descritivo, prestadorservico:$prestadorservico);
				$clienteDAO = new clienteDAO();
				$retorno = $clienteDAO->inserir($cliente);
				return json_encode($retorno);
			
		}//fim
	}//fim classe
	
	if(isset($_GET["oper"]))
	{
		$obj = new clienteRest();
		$metodo = $_GET["oper"];
		if($_GET["oper"] == "buscar_agendas")
		{
			$ret = $obj->$metodo($_GET["nome"], $_GET["celular"], $_GET["data"], $_GET["horario"], $_GET["descritivo"], $_GET["prestadorservico"]);
			exit($ret);
		}
	}//if get
	
	
?>