<?php 
    

    $listaAvisos = array();


    function GetLista($ra_aluno){
        $response  = file_get_contents("http://186.233.148.102:8080/GetListaAvisos/$ra_aluno");

        $utf8response = utf8_encode($response);

        $jsonListaAvisos = json_decode($utf8response);

        return $jsonListaAvisos;
    }

    function MarcaComoLida($id_aviso){

        $response  = file_get_contents("http://186.233.148.102:8080/PutAviso/$id_aviso");

        $utf8response = utf8_encode($response);

        $jsonListaAvisos = json_decode($utf8response);

        if($jsonListaAvisos){
            echo "Lida!";
        }else{
            echo "Erro!";
        }
        
    }

?>