<?php session_start();
$usuario = $_SESSION['RA'];
$idSala = $_GET['IdAp'];

$consumo = file_get_contents("http://186.233.148.102:8080/PutAgendamentoAluno/$usuario/$idSala/i");

$consumo = utf8_encode($consumo);
$consumo = json_decode($consumo);

header('Location: agendar_provas.php');
	exit();

?>