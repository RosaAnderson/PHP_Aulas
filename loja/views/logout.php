<?php
#	if (isset($_SESSION))
#	{
		session_destroy();
		
		header("location:login.php");
#	}

	$_SESSION['nome'] = '';


	header("location:index.php");
?>