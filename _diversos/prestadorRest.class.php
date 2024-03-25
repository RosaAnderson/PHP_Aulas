<?php
	require_once "../models/conexao.class.php";
	require_once "../models/prestadorDAO.class.php";
	require_once "../models/prestador.class.php";
	require_once "../models/agendaDAO.class.php";
	
	
	
	class prestadorRest
	{
		public function buscar_agendas()
		{
			$agendaDAO = new agendaDAO();
			$retorno = $agendaDAO->buscar_todas_agendas();
			return json_encode($retorno);
		}
		
		public function inserir_prestador($nome, $celular, $data, $horario, $descritivo, $prestadorservico)
		{
			
				$prestador = new Prestador(nome:$nome, celular:$celular, data:$data, horario:$horario, descritivo:$descritivo, prestadorservico:$prestadorservico);
				$prestadorDAO = new prestadorDAO();
				$retorno = $prestadorDAO->inserir($prestador);
				return json_encode($retorno);
			
		}//fim
	}//fim classe
    if(isset($_POST["oper"]))
	{
		$obj = new prestadorRest();
		$metodo = $_POST["oper"];
		if($_POST["oper"] == "buscar_agendas")
		{
			$ret = $obj->$metodo($_POST["nome"], $_POST["celular"], $_POST["data"], $_POST["horario"], $_POST["descritivo"], $_POST["prestadorservico"]);
			exit($ret);
		}

    }
?>    