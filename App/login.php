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

        //print_r($data);
		// Vamos verificar se $data não é null para podermos adicionar em nossa _SESSION, o servidor retornara null para ra_user ou pw_user incorreto.

	 	if($data->Situacao == "Não Encontrado"){
	 		echo '<script type="text/javascript"> alert("RA ou Senha incoreta, tente novamente!")</script>';
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
<html class="no-js" lang="pt-BR">

<head>
    <meta charset="utf-8">
    

    
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="polo fácil unip oline">
    <meta name="author" content="vse tecnologia">
    <meta name="keywords" content="gerenciamente de polos ead">

    <title>Login | Polo Fácil</title>

    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
		<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>POR FAVOR, FAÇA LOGIN</h3>
				<p>Polo Fácil, o melhor app!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="login.php" method="POST" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Nº da Matrícula</label>
                                <input type="text" placeholder="1234567" title="Por favor, digite seu RA (Nº da matricula)" autofocus required="" value="" name="ra_user" id="username" class="form-control">
                                <span class="help-block small">Use o seu RA</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Senha</label>
                                <input type="password" pattern="[0-9]+" title="Apenas os números do CPF, sem pontos (.) e  hífen (-)" placeholder="***********" required="" value="" name="pw_user" id="password" class="form-control">
                                <span class="help-block small">Apenas digite seu CPF</span>
                            </div>
                            <!--<div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div>-->
                            <button type="submit" form="loginForm" class="btn btn-success btn-block loginbtn">Login</button>
                        </form>
                        <div class="text-center">
                           <br>
                           <p class="h6 lead">Acesse a nossa Calculadora de Média e descubra sua nota para cursos de Bacharelado/Licenciatura, Gestão ou PÓS</p>
                           <a href="calcular_media.php" class="btn btn btn-success btn-lg">Acessar agora!</a>
                        </div>
                        
                    </div>
                    
                </div>
			</div>
			<div class="text-center login-footer">
                <br/>
				Copyright © 2019. Polo Fácil<br/>
				Todos os direitos reservados<br/><br/>

				Dúvidas?<br/>
				ouvidoria@vsetecnologia.com.br
			</div>
		</div>   
    </div>
	
	<!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
</body>
</html>
