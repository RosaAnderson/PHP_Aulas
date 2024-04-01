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
	$dog  = new Cachorro('Venus', 'Caramelo', 'SRD', '20/03/2013', '265.194.348-76', 'Anderson Rosa', '(14) 99906 5400')

/**/
	echo "<pre>";
		var_dump($prop);
	echo "</pre>";	
	
/**/
	echo "<br> <br>";

	echo "<pre>";
		var_dump($prof);
	echo "</pre>";	

/**/
	echo "<br> <br>";

	echo "<pre>";
		var_dump($dog);
	echo "</pre>";	
/**/
?>