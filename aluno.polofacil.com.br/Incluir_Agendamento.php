<?php session_start();

$usuario = $_SESSION['RA'];
$idSala = $_GET['IdAp'];
$cod = $_GET['COD'];





$consumo = file_get_contents("http://186.233.148.102:8080/PutAgendamentoAluno/$usuario/$idSala/i/$cod");

$consumo = utf8_encode($consumo);
$consumo = json_decode($consumo);

print_r($consumo);


header('Location: agendar_provas.php');
	exit();

?>