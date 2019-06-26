<?php
	// Inicia a _SESSION. Sempre colocar na primeira linha depois no <?php!
	session_start();
	$msg = 0;
	if(isset($_SESSION['Nome']) && empty($_SESSION['Nome']) == false) {
		header('Location: index.php');
	}else{

		// Verifica, atraves do method="POST", se existe um campo ra_user e verifica se não esta vario. 
		if(isset($_POST['ra_user']) && empty($_POST['ra_user']) == false){

		// Cria duas variaveis para  ra e senha e adiciona os valores passos atraves do method="POST".
		$ra_user = addslashes($_POST['ra_user']);
		$pw_user = addslashes($_POST['pw_user']);

		// Podemos fazer uma requisição ao web servises atrses no cURL.
		// Inicia a biblioteca cURL.
		$ch = curl_init();

		// Passamos nosso caminho para web services. Exemplo: https://polofacil.com/api/login
		// Note que, vamos passar as variares $ra_user e $pw_user para nosso web services.
		curl_setopt($ch, CURLOPT_URL, "http://186.233.148.102:8080/ConsultaAluno/$ra_user/$pw_user");

		// Se true, esperamos pelo retorno 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Agora, executamos nosso cURL e armazenamos a resposta na variavel $res
		$res = curl_exec($ch);

		// É muito importando fecharmos nossa conexão após a execução.
		curl_close($ch);

		// Agora, vamos decodificar nosso Json
		$datas = utf8_encode($res);
        $data = json_decode($datas);

		// Vamos verificar se $data não é null para podermos adicionar em nossa _SESSION, o servidor retornara null para ra_user ou pw_user incorreto.

	 	if($data == null){
	 		$msg = "RA ou senha incorreta";
	 	}else{
	 		
		 		// Criar os campos na _SESSION e insere os falores recebidos no Json
		 		$_SESSION['idPolo'] = $data->idPolo;
		 		$_SESSION['RA'] = $data->RA;
		 		$_SESSION['CPF'] = $data->CPF;
		 		$_SESSION['Nome'] = $data->Nome;
		 		$_SESSION['Curso'] = $data->Curso;
		 		$_SESSION['Situacao'] = $data->Situacao;
		 		$_SESSION['Polo'] = $data->Polo;
		 		$_SESSION['CEP'] = $data->CEP;
		 		$_SESSION['Endereco'] = $data->Endereco;
		 		$_SESSION['Numero'] = $data->Numero;
		 		$_SESSION['Complemento'] = $data->Complemento;
		 		$_SESSION['Bairro'] = $data->Bairro;
		 		$_SESSION['Cidade'] = $data->Cidade;
		 		$_SESSION['UF'] = $data->UF;
		 		$_SESSION['Celular'] = $data->Celular;
		 		$_SESSION['Telefone'] = $data->Telefone;
		 		$_SESSION['DDD'] = $data->DDD;
		 		$_SESSION['Email'] = $data->Email;

		 		// Muda o cabeçalho no navegador e redireciona para index.php
		 		header('Location: index.php');
	 		}
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Polo Fácil | Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3A400%2C700%7CArimo%3A700&subset=latin&ver=1480945793" type="text/css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
	<style type="text/css">
		.form-login{
			width: 300px;
			height: 300px;
			background-color: #ccc;
			margin: auto;
			margin-top: 30px;
			text-align: center;
			padding: 20px;
			border-radius: 10px;
		}
		.input-campos input{
			width: 220px;
			margin-bottom:25px;
			padding: 15px;
			font-size: 14px;
			borde: 1px solid #cff;
		}
	</style>
</head>
<body style="background-color: #4e52af; color: #fff">
	<div style="max-width:320px;margin:auto;">
		<div class="loginlogo">
			<img src="assets/images/logo/logo_white.png" border="0" height="80" />
		</div>
		<div class="box">
			<div class="box-body">
				<!-- Formulario simples -->
				<form method="POST">	
					<strong>RA:</strong>
					<input type="text" name="ra_user" class="form-control" autofocus placeholder="RA do aluno" required>
					<br>
					<strong>CPF:</strong>
					<input type="password" name="pw_user" class="form-control" placeholder="CPF do aluno" pattern="[0-9]+" title="Apenas os números do CPF, sem pontos (.) e  hífen (-) " required>
					<br>
					<input type="submit" value="Entrar" class="button" />
					<br/><br/><br/>
				</form>		
			</div>
		</div>
		<div style="text-align:center">
			Polo Fácil 2019<br/>
			Todos os direitos reservados<br/><br/>

			Dúvidas?<br/>
			ouvidoria@vsetecnologia.com.br
		</div>
	</div>
	
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
