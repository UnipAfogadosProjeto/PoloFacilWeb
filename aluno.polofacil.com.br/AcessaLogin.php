<?php
 
//$email = $_POST['email'];
//$senha = $_POST['senha'];
$email = "erenildesmenezes@hotmail.com";
$senha = "123";


 $conexao = file_get_contents("http://186.233.148.102:8080/GetLoginTutor/$email/$senha");
 $conexao = utf8_encode($conexao);
 $conexao = json_decode($conexao);







                $_SESSION['Id'] = $conexao->Id;
		 		$_SESSION['nome'] = $conexao->nome;
		 		$_SESSION['apelido'] = $conexao->apelido;
		 		$_SESSION['cpf'] = $conexao->cpf;
                $_SESSION['email'] = $conexao->email;
                $_SESSION['endereco'] = $conexao->endereco;
		 		$_SESSION['numero'] = $conexao->numero;
		 		$_SESSION['complemento'] = $conexao->complemento;
		 		$_SESSION['bairro'] = $conexao->bairro;
		 		$_SESSION['cep'] = $conexao->cep;
		 		$_SESSION['cidade'] = $conexao->cidade;
		 		$_SESSION['uf'] = $conexao->uf;
		 		$_SESSION['telefone'] = $conexao->telefone;
		 		$_SESSION['celular'] = $conexao->celular;
		 		$_SESSION['idpolo'] = $conexao->idpolo;
		 		$_SESSION['tipo'] = $conexao->tipo;
		 		$_SESSION['graduacao'] = $conexao->graduacao;
		 		$_SESSION['especializacao'] = $conexao->especializacao;
		 		$_SESSION['posead'] = $conexao->posead;
                $_SESSION['ativo'] = $conexao->ativo;
		 		$_SESSION['nascimento'] = $conexao->nascimento;


                 print_r($_SESSION['nome']);
?>