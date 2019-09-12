<?php 

	function TurmasDisponiveis($idPolo){

		$response  = file_get_contents("http://186.233.148.102:8080/GetTurma/$idPolo");

	    $utf8response = utf8_encode($response);

	    $jsonListaAvisos = json_decode($utf8response);

	    return $jsonListaAvisos;

	}

	function GetLastTurma($idPolo){

		$response  = file_get_contents("http://186.233.148.102:8080/GetTurma/$idPolo");

	    $utf8response = utf8_encode($response);

	    $jsonListaAvisos = json_decode($utf8response);

	    return $jsonListaAvisos->Turmas[0]->Turma; 

	}
    //foreach ($jsonListaAvisos->Turmas as $item) {
    	//echo  "$item->Turma</br>";
    //}

?>

