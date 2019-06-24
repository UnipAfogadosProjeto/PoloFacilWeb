<?php

	session_start();

	if(isset($_SESSION['Nome']) && empty($_SESSION['Nome']) == false) {
		
		echo "<a href=\"logout.php\">Logout</a>";
		echo "Bem vindo ".$_SESSION['Nome'];
		echo "ID do Polo ".$_SESSION['idPolo'];

	}else{
		header('Location: login.php');
	}

?>

