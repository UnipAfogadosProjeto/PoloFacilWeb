<?php



session_start();

$tipo_curso = "BL";
$tipo_avaliacao = "AP";

$n_pim = "0";



$consumo = array();
 
//if(isset($_POST['n_prova']) && empty($_POST['n_prova']) == false) {
	
  $n_prova_converte = $_POST['n_prova'];
  $n_prova = str_replace(",",".", $n_prova_converte);
  $n_ava_converte = $_POST['n_ava'];
  $n_ava = str_replace(",",".", $n_ava_converte);
	$n_exame_converte = $_POST['n_exame'];
  $n_exame = str_replace(",",".", $n_exame_converte);
   
	$consumo = file_get_contents("http://186.233.148.102:8080/CalculaMedia/$tipo_curso/$tipo_avaliacao/$n_prova/$n_pim/$n_ava/$n_exame");

	$consumo = utf8_encode($consumo);
	$consumo = json_decode($consumo);

	$resultato_final = $consumo->Resultado;
  $nota_final = $consumo->Media;

 
	



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

    <title>Resultado | Calculadora de Média UNIP | Polo Fácil</title>

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
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="css/modals.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
		$(document).ready(function(){
			$("#PrimaryModalalert").modal('show');
		});
	</script>
</head>
<body>
    <div class="all-content-wrapper">
       	        <!-- Modals Start-->
        <div class="login-form-area edu-pd mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <?php

          


											if($resultato_final == ("Aprovado")){
												echo '<i class="educate-icon educate-checked modal-check-pro"></i>';
												echo '<h2>'.$resultato_final.'!'.'</h2>';
												echo '<p>Parabéns aluno, você foi aprovado com nota '.$nota_final.'!</p>';
											}else if($resultato_final == "Reprovado"){
												echo '<span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>';
												echo '<h2>'.$resultato_final.'!'.'</h2>';
												echo '<p>Você foi reprovado com nota '.$nota_final.'!</p>';
												echo '<p>Aproveite esse tempo para revisar os estudos.</p>';
                      }elseif($resultato_final == ("Aprovado!")){
                        echo '<i class="educate-icon educate-checked modal-check-pro"></i>';
												echo '<h2>'.$resultato_final.'!'.'</h2>';
												echo '<p>Parabéns aluno, você foi aprovado com nota '.$nota_final.'!</p>';
                      }
                      else{
												echo '<span class="educate-icon educate-warning modal-check-pro information-icon-pro"></span>';
												echo '<p>Erro! Tente novamente...</p>';
											}
										?> 
                                    </div>
                                    <div class="modal-footer">
                                        <a href="media.php">Voltar</a>
                                        <a href="login.php">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modals End-->
	</div>


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
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>

</body>
</html>