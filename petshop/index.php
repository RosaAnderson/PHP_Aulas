<?php
	
	require_once "class/c.pessoa.php";
	require_once "class/c.proprietario.php";
	require_once "class/c.profissional.php";
	require_once "class/c.cachorro.php";
	require_once "class/c.atendimento.php";
	require_once "class/c.servico.php";

	//
	$prop = new Proprietario('265.194.348-76', 'Anderson Rosa', '(14) 99906 5400');
	
	//
	$prof = new Profissional('8972397467982', 'Albert Einstein', '(14) 99909 7654');

	//
	$dog  = new Cachorro('Venus', 'Caramelo', 'SRD', '20/03/2013', array($prop));
	
	//
	$serv = new Servico('Banho e Tosa', 45.60);
	
	//
	$atd  = new Atendimento('30/03/2024', array($serv), array($dog));


	echo "<h2> Atendimento </h2>";
	
	echo "Data: {$atd -> getData()} <br>";
	
	foreach ($atd -> getCachorro() as $obj)
	{
		echo "Para: {$dog -> getNome()} => Tutor: {$prop -> getNome()} <br>";
		echo "Serviço: {$serv -> getDescritivo()} => Profissional: {$prof -> getNome()} <br>";
	}
	
/**
	echo "<pre>";
		var_dump($prop);
	echo "</pre>";	
/**
	echo "<br> <br>";

	echo "<pre>";
		var_dump($prof);
	echo "</pre>";	
/**
	echo "<br> <br>";

	echo "<pre>";
		var_dump($dog);
	echo "</pre>";	
/**
	echo "<br> <br>";

	echo "<pre>";
		var_dump($atd);
	echo "</pre>";	
/**/
?>
