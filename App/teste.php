<?php
require 'login.php';
$c = $ra_user;
$consumo = file_get_contents("http://186.233.148.102:8080/GetAgendamentoAluno/$c");





?>