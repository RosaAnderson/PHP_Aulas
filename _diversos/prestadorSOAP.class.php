<?php
	require_once "../models/conexao.class.php";
	require_once "../models/prestadorDAO.class.php";
	require_once "../models/servico.class.php";
	require_once "../models/prestador.class.php";
	
	$server = new soapServer("prestador.wsdl");
	
	class prestadorSOAP
	{
		private $autenticacao = false;
		
		public function Security($header)
		{
			if(isset($header->username) && isset($header->password))
			{
				if($header->username == "gustavo" && $header->password == "123")
				{
					$this->autenticacao = true;
				}
		
			}
		}
			
		public function buscar_prestador_servicos($servico)
		{
			if($this->autenticacao)
			{
				$obj_servico = new Servico($servico);
				
				$prestador= new Prestador(servico:array($obj_servico));
				
				$prestadorDAO = new prestadorDAO();
				
				$retorno = $prestadorDAO->buscar_prestador_por_servicos($prestador);
				
				return json_encode($retorno);
			}
			else
			{
				return json_encode("Problema na autenticação");
			}
		}//fim
		
		
		
	}//fim classe
	
	$server->setObject(new prestadorSOAP());
	$server->handle();
	//$obj = new prestadorSOAP();
	//var_dump($obj->buscar_prestador_servicos(1));
	
?>