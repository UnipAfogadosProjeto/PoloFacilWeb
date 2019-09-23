<?php session_start(); // Inicia a _SESSION. Sempre colocar na primeira linha depois no <?php!
    $msg = 0;
    if(isset($_SESSION['nome']) && empty($_SESSION['nome']) == false) {
        header('Location: index.php');
        exit();
    }else{

        // Verifica, atraves do method="POST", se existe um campo ra_user e verifica se não esta vario. 
        if(isset($_POST['username']) && empty($_POST['username']) == false){

        // Cria duas variaveis para  ra e senha e adiciona os valores passos atraves do method="POST".
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);

        // Podemos fazer uma requisição ao web servises atrses no cURL.
        // Inicia a biblioteca cURL.
        $ch = curl_init();

        // Passamos nosso caminho para web services. Exemplo: https://polofacil.com/api/login
        // Note que, vamos passar as variares $ra_user e $pw_user para nosso web services.
        curl_setopt($ch, CURLOPT_URL, "http://186.233.148.102:8080/GetLoginPolo/$username/$password");

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

            if($data->Situacao == "Erro Login"){
                echo '<script type="text/javascript"> alert("Usuário ou senha incoreta, tente novamente!")</script>';
            }else{
                
                    // Criar os campos na _SESSION e insere os falores recebidos no Json
                    $_SESSION['id_polo'] = $data->IdPolo;
                    $_SESSION['nome'] = $data->nome;

                    // Muda o cabeçalho no navegador e redireciona para index.php
                    header('Location: matriculas.php');
                    exit();
                }
        }
    }
    
?>

<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | PoloFácil Web</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
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
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>DASHBOARD LOGIN</h3>
                <p>Polo Fácil Web, o melhor app!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="login.php" method="POST" id="loginForm">
                            <div class="form-group">
                                <label class="control-label control-label2" for="username">Usuário</label>
                                <input type="text" placeholder="example" title="Digite seu nome de usuário" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Seu nome de usuário exclusivo para o aplicativo</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label control-label2" for="password">Senha</label>
                                <input type="password" title="Por favor, insira sua senha" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Sua senha forte</span>
                            </div>
                            <button type="submit" form="loginForm" class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="#">Registre-se agora</a>
                        </form>
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
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>