<?php

	require_once "c.consulta.php";
	require_once "c.prescricao.php";
	require_once "c.medicamento.php";
	require_once "c.exame.php";
	require_once "c.pessoa.php";
	require_once "c.medico.php";
	require_once "c.paciente.php";
	require_once "c.telefone.php";

	$pass01 = new Paciente('Deboas', 'Marcia', '888.777.666-90', '14', '99945-4444');

	$doct01 = new Medico('Gastro', 'Jonas', '000.999.888-21', '14', '99999-6666');

	$medi01 = new Medicamento('Coberfresh', 'vermelha', 'miturar com 150ml de água');
	
	$exam01 = new Exame('Endoscopia', 'beber solução anestésica');

	$cons01 = new Consulta('10/04/2024', '11:30', array($exam01), array($doct01), array($pass01));

	$pres01	= new Prescricao('Tomar vite gotas antes do almoço', $cons01, $medi01);







	echo "<h2> Receita </h2>";
	echo "Prescrição: " . $pres01 -> getPrescricao() . "<br>";

	echo "<h2> </h2>";
	echo "<h2> </h2>";
	echo "<h2> </h2>";
	echo $pres01 -> getPrescricao();

	echo "<pre>";
		var_dump($pres01);		
	echo "</pre>";
?>