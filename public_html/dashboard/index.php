<?php session_start();


    if($_SESSION['nome'] != null & empty($_SESSION['nome']) == false){

        $ip_polo = $_SESSION['id_polo'];

        $ch = curl_init();

        // Passamos nosso caminho para web services. Exemplo: https://polofacil.com/api/login
        // Note que, vamos passar as variares $ra_user e $pw_user para nosso web services.
        curl_setopt($ch, CURLOPT_URL, "http://186.233.148.102:8080/GetDashboard/$ip_polo");

        // Se true, esperamos pelo retorno 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Agora, executamos nosso cURL e armazenamos a resposta na variavel $res
        $res = curl_exec($ch);

        // É muito importando fecharmos nossa conexão após a execução.
        curl_close($ch);

        // Agora, vamos decodificar nosso Json
        $datas = utf8_encode($res);
        $data = json_decode($datas);

        if($data ==null){
                echo '<script type="text/javascript"> alert("RA ou Senha incoreta, tente novamente!")</script>';
        }else{

            
            
            $_SESSION['ReceitaTotal'] = (double)str_replace(",", ".", $data->ReceitaTotal);
            $_SESSION['DespesaTotal'] = (double)str_replace(",", ".", $data->DespesaTotal);
            $_SESSION['Alunos'] = (double)str_replace(",", ".", $data->Alunos);
            $_SESSION['RMA'] = (double)str_replace(",", ".", $data->RMA);
            $_SESSION['CMA'] = (double)str_replace(",", ".", $data->CMA);
            $_SESSION['IndiceMC'] = (double)str_replace(",", ".", $data->IndiceMC);
            $_SESSION['PontoEquilibrio'] = (double)str_replace(",", ".", $data->PontoEquilibrio);
            $_SESSION['ValorPago'] = (double)str_replace(",", ".", $data->ValorPago);
            $_SESSION['ValorAPagar'] = (double)str_replace(",", ".", $data->ValorAPagar);
            $_SESSION['Despesa'] = (double)str_replace(",", ".", $data->Despesa);
            $_SESSION['Custo'] = (double)str_replace(",", ".", $data->Custo);
            $_SESSION['Mensal'] = (double)str_replace(",", ".", $data->Mensal);
            $_SESSION['Eventual'] =  (double)str_replace(",", ".", $data->Eventual);
            $_SESSION['Fixo'] = (double)str_replace(",", ".", $data->Fixo);
            $_SESSION['Variavel'] = (double)str_replace(",", ".", $data->Variavel);
        }

    }else{
        header('Location: login.php');
        exit();
    }


    

?>

<!doctype html>
<html class="no-js" lang="en">

<head>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106127269-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-106127269-2');
    </script>

    <title>Dashboard Polo  | PoloFácil Web</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Agende provas, confira apostilas disponiveis, tenha acesso a centenas de provas simuladas para estudar e muito mais. Tudo de forma rápida, simples e segura. PoloFácil Web">
    <meta name="author" content="vse tecnologia">
    <meta name="keywords" content="gerenciamento de polos ead, provas unip, polofacil, calcular media">

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
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/pf_logo.png" alt="" /></a>
                <strong><a href="index.php"><img src="img/logo/pf_logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a title="Landing Page" href="index.php" aria-expanded="false"><span class="educate-icon educate-home icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="matriculas.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Matriculas</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="financeiro.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Financeiro</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="index.php" class="nav-link">Início</a>
                                                </li>
                                                <li class="nav-item"><a href="https://www.vsetecnologia.com.br/quem-somos" class="nav-link">Sobre</a>
                                                </li>
                                                <li class="nav-item"><a href="https://www.vsetecnologia.com.br/produtos" class="nav-link">Serviços</a>
                                                </li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Portais <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="http://aluno.polofacil.com.br/login.php" class="dropdown-item">Aluno</a>
                                                        <a href="http://tutoria.polofacil.com.br/login.html" class="dropdown-item">Tutoria</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="https://www.vsetecnologia.com.br/fale-conosco" class="nav-link">Suporte</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            
                                                            <span class="admin-name"><?php echo $_SESSION["nome"]; ?></span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>Minha Conta</a>
                                                        <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Sair</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li>
                                            <a href="index.php">Dashborad <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        </li>
                                        <li>
                                            <a href="matriculas.php">Matrículas <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        </li>
                                        <li>
                                            <a href="financeiro.php">Financeiro <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index.php">Início </a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod"> Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Alunos Matriculados</h5>
                                <h2><span><?php echo $_SESSION['Alunos'];?></span> <span class="tuition-fees"></span></h2>
                                <!--<span class="text-success">20%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                               <h5>Custo Mensal por Aluno</h5>
                                <h2>R$<span><?php echo $_SESSION['CMA'];?></span> <span class="tuition-fees"></span></h2>
                                <!--<span class="text-success">20%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Receita Média por Aluno</h5>
                                <h2>R$ <span><?php echo $_SESSION['RMA'];?></span> <span class="tuition-fees"></span></h2>
                                <!--<span class="text-success">20%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Receita do mês</h5>
                                <h2>R$<span><?php echo $_SESSION['ReceitaTotal'];?></span> <span class="tuition-fees"></span></h2>
                                <!--<span class="text-success">20%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="analytics-sparkle-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Margem de Contribuição</h5>
                                <h2><span><?php echo $_SESSION['IndiceMC'];?></span> <span class="tuition-fees"></span></h2>
                                <!--<span class="text-success">20%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                               <h5>Ponto de Equilibro</h5>
                                <h2><span><?php echo $_SESSION['PontoEquilibrio'];?></span> <span class="tuition-fees"></span></h2>
                                <!--<span class="text-success">20%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Custo/Despesa do Mês</h5>
                                <h2>R$ <span><?php echo $_SESSION['ReceitaTotal'];?></span> <span class="tuition-fees"></span></h2>
                                <!--<span class="text-success">20%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Despesa mensals</h5>
                                <h2>R$<span><?php echo $_SESSION['DespesaTotal'];?></span> <span class="tuition-fees"></span></h2>
                                <!--<span class="text-success">20%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Charts Start-->
        <div class="charts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="charts-single-pro responsive-mg-b-30">
                            <div class="alert-title">
                                <h2>Custo / Despesa</h2>
                            </div>
                            <div id="pie-chart">
                                <canvas id="piechart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="charts-single-pro responsive-mg-b-30">
                            <div class="alert-title">
                                <h2>Fixo / Variável</h2>
                            </div>
                            <div id="bar1-chart">
                                <canvas id="piechart2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="charts-single-pro responsive-mg-b-30">
                            <div class="alert-title">
                                <h2>Mensal / Eventual</h2>
                            </div>
                            <div id="bar1-chart">
                                <canvas id="piechart3"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Receita Média por Aluno</h5>
                                <h2>R$ <span><?php echo $_SESSION['RMA'];?></span> <span class="tuition-fees"></span></h2>
                                <!--<span class="text-success">20%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                        <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Receita do mês</h5>
                                <h2>R$<span><?php echo $_SESSION['ReceitaTotal'];?></span> <span class="tuition-fees"></span></h2>
                                <!--<span class="text-success">20%</span>
                                <div class="progress m-b-0">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Charts End-->
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
    <!-- morrisjs JS
		============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- Charts JS
        ============================================ -->
    <script src="js/charts/Chart.js"></script>
    <!--<script src="js/charts/bar-value.js"></script>
     plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>

    <script>
        (function ($) {
       "use strict";

        var custo = "<?php echo $_SESSION["Custo"];?>";
        var despesa = "<?php echo $_SESSION["Despesa"];?>";

        var fixo = "<?php echo $_SESSION["Fixo"];?>";
        var variavel = "<?php echo $_SESSION["Variavel"];?>";

        var mensal = "<?php echo $_SESSION["Mensal"];?>";
        var eventual = "<?php echo $_SESSION["Eventual"];?>";


        /*----------------------------------------*/
        /*  1.  pie Chart
        /*----------------------------------------*/
        var ctx = document.getElementById("piechart");
        var piechart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Custo", "Despesa"],
                datasets: [{
                    label: 'pie Chart',
                    backgroundColor: [
                        '#303030',
                        '#933EC5'
                    ],
                    data: [custo, despesa]
                }]
            },
            options: {
                responsive: true
            }
        });

        /*----------------------------------------*/
        /*  1.  pie Chart
        /*----------------------------------------*/
        var ctx = document.getElementById("piechart2");
        var piechart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Fixo", "Variável"],
                datasets: [{
                    label: 'pie Chart',
                    backgroundColor: [
                        '#303030',
                        '#933EC5'
                    ],
                    data: [fixo, variavel]
                }]
            },
            options: {
                responsive: true
            }
        });

        /*----------------------------------------*/
        /*  1.  pie Chart
        /*----------------------------------------*/
        var ctx = document.getElementById("piechart3");
        var piechart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Mensal", "Eventual"],
                datasets: [{
                    label: 'pie Chart',
                    backgroundColor: [
                        '#303030',
                        '#933EC5'
                    ],
                    data: [mensal, eventual]
                }]
            },
            options: {
                responsive: true
            }
        });

         /*----------------------------------------*/
        /*  1.  Bar Chart
        /*----------------------------------------*/

        var ctx = document.getElementById("barchart1");

        var barchart1 = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Custo", "Despesa"],
                datasets: [{
                    label: 'Custo / Despesa',
                    data: [custo, despesa],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            autoSkip: false,
                            maxRotation: 0
                        },
                        ticks: {
                          fontColor: "#fff", // this here
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            autoSkip: false,
                            maxRotation: 0
                        },
                        ticks: {
                          fontColor: "#fff", // this here
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("barchart2");
        var barchart1 = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Fixo", "Variável"],
                datasets: [{
                    label: 'Fixo / Variável',
                    data: [fixo, variavel],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            autoSkip: false,
                            maxRotation: 0
                        },
                        ticks: {
                          fontColor: "#fff", // this here
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            autoSkip: false,
                            maxRotation: 0
                        },
                        ticks: {
                          fontColor: "#fff", // this here
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("barchart3");
        var barchart1 = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Mensal", "Eventual"],
                datasets: [{
                    label: 'Mensal / Eventual',
                    data: [mensal, eventual],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            autoSkip: false,
                            maxRotation: 0
                        },
                        ticks: {
                          fontColor: "#fff", // this here
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            autoSkip: false,
                            maxRotation: 0
                        },
                        ticks: {
                          fontColor: "#fff", // this here
                        }
                    }]
                }
            }
        }); 
            
    })(jQuery); 
    </script>
</body>

</html>