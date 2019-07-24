<?php

$idAviso = $_GET['idAviso'];

$response  = file_get_contents("http://186.233.148.102:8080/PutAviso/$idAviso");

$utf8response = utf8_encode($response);

$jsonListaAvisos = json_decode($utf8response);

if($jsonListaAvisos){
    echo "Lida!";
}else{
    echo "Erro!";
}

?>



