<?php 
    
    $ra =   $_SESSION['RA'];

    $listaAvisos = array();
    
    $strinf = '{"Avisos":[{"idAviso":"18761","Titulo":"mensagem pra voce","Mensagem":"Seu atendimento foi alterado. Situaçao do Atendimento: Concluído, Atendente: Luis Artur Monteiro de Brito Menezes, Obs: boa noite Deusinho. E o PloFacil Boa noite","DataEnvio":"05/07/2019 09:17:48"},{"idAviso":"16094","Titulo":"teste","Mensagem":"Seu atendimento foi alterado. Situaçao do Atendimento: Concluído, Atendente: Ana Paula Patricia de Lima Santiago, Obs: ","DataEnvio":"19/02/2019 10:45:57"},{"idAviso":"16093","Titulo":"teste","Mensagem":"Seu atendimento foi alterado. Situaçao do Atendimento: Em atendimento, Atendente: , Obs: ","DataEnvio":"19/02/2019 10:45:31"},{"idAviso":"16092","Titulo":"Dicumentos","Mensagem":"Seu atendimento foi alterado. Situaçao do Atendimento: Concluído, Atendente: Ana Paula Patricia de Lima Santiago, Obs: RG , CPF ","DataEnvio":"19/02/2019 10:44:09"},{"idAviso":"16091","Titulo":"Dicumentos","Mensagem":"Seu atendimento foi alterado. Situaçao do Atendimento: Pendente, Atendente: Ana Paula Patricia de Lima Santiago, Obs: RG , CPF ","DataEnvio":"19/02/2019 10:43:09"},{"idAviso":"16090","Titulo":"","Mensagem":"Seu atendimento foi alterado. Situaçao do Atendimento: Em atendimento, Atendente: Ana Paula Patricia de Lima Santiago, Obs: ","DataEnvio":"19/02/2019 10:41:33"},{"idAviso":"12901","Titulo":"Para ver as minha dos Boiletos","Mensagem":"Seu atendimento foi alterado. Situaçao do Atendimento: Concluído, Atendente: Flavia Oliveira, Obs: ","DataEnvio":"06/08/2018 17:50:40"},{"idAviso":"12900","Titulo":"Para ver as minha dos Boiletos","Mensagem":"Seu atendimento foi alterado. Situaçao do Atendimento: Pendente, Atendente: , Obs: ","DataEnvio":"06/08/2018 17:49:19"},{"idAviso":"5575","Titulo":"Prorrogação EDs / provas","Mensagem":"Prezados alunos Informamos que o prazo para realização das Atividade Acadêmicas, assim como a realização das provas, foi prorrogado, excepcionalmente, até 7/10. Os alunos serão avisados através dos sistemas que têm acesso e por SMS. Atenciosamente,","DataEnvio":"25/09/2017 16:26:40"},{"idAviso":"5109","Titulo":"AVA em Manutenção","Mensagem":"Prezado Aluno, Informamos que a plataforma Blackboard Internacional, responsável pelo Ambiente Virtual de Aprendizagem (AVA), passará por uma atualização das 0 hora de 23/09/2017 às 0 hora de 25/09/2017. O sistema estará indisponível neste período. As atividades acadêmicas poderão ser prorrogadas.","DataEnvio":"21/09/2017 16:44:24"},{"idAviso":"1504","Titulo":"Avaliação Presencial","Mensagem":"Prezados Graduandos, como mostra em seu calendário acadêmico suas avaliações bimestrais inciam-se na próxima semana, informamos que compareça ao polo na data POSTERIOR que estiver no seu calendário, a partir das 19h30min. Lembre-se! só é permitido realizar a prova com caneta preta e sem uso de Celulares. Em caso de duvidas contate seu tutor, ou a Secretaria das 13 as 22h.","DataEnvio":"19/09/2017 17:34:26"}]}';

    $dataLista = '{"Avisos":[{"idAviso":"18761","Titulo":"mensagem pra voce","Mensagem":"Seu atendimento foi alterado. Situaçao do Atendimento: Concluído, Atendente: Luis Artur Monteiro de Brito Menezes, Obs: boa noite Deusinho. E o PloFacil Boa noite","DataEnvio":"05/07/2019 09:17:48"}]}';


    function GetLista($ra_aluno){
        $response  = file_get_contents("http://186.233.148.102:8080/GetListaAvisos/$ra_aluno");
        global $strinf;
        //$outra = str_replace("'","\'", $strinf);

        $utf8response = utf8_encode($response);

        $jsonListaAvisos = json_decode($strinf);

        return $jsonListaAvisos;
    }


    function GetContentIdLista($is_lista){
        if($listaAvisos != null){
            $msg = array_keys($listaAvisos);
            if (!empty($msg)) {
                return $msg[$is_lista];
            }
        }elseif ($listaAvisos->Avisos == "Sem Avisos") {
            return "Sem avisos";
        }else{
            GetLista($ra);
            GetContentIdLista($is_lista);
        }
    }

?>