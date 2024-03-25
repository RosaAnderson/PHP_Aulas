<?php
	
	require_once "class/c.pessoa.php";
	require_once "class/c.proprietario.php";
	require_once "class/c.profissional.php";

/**/
	$prop = new Proprietario('265.194.348-76', 'Anderson Rosa', '(14) 99906 5400');
	
	echo "<pre>";
		var_dump($prop);
	echo "</pre>";	
	
/**/
	echo "<br> <br>";

	$prof = new Profissional('8972397467982', 'Albert Einstein', '(14) 99909 7654');
	
	echo "<pre>";
		var_dump($prof);
	echo "</pre>";	

/**	
	
	$cc -> retirada(500);
	
	echo "Saldo CC: {$cc -> getSaldo()}<br>";
	
	$cp -> retirada(50);
	
	echo "<br>";

	echo "Saldo CP: {$cp -> getSaldo()}<br>";	
/**/









?>