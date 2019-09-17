
<?php 
       
        session_start();
    $idPolo = $_SESSION['idPolo'];
    $idCurso = $_SESSION['IdCurso'];

    $consumo = file_get_contents("http://186.233.148.102:8080/GetTutor/$idCurso/$idPolo");
    $consumo = utf8_encode($consumo);
    $consumo = json_decode($consumo);


   

?>
<!DOCTYPE html>
<html class="no-js" lang="pt-BR">

<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="estilo.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106127269-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-106127269-2');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-9723470720814758",
              enable_page_level_ads: true
         });
    </script>
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <meta charset="utf-8">
    
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="polo fácil unip oline">
    <meta name="author" content="vse tecnologia">
    <meta name="keywords" content="gerenciamente de polos ead">
    

    <title>Dashboard | Polo Fácil</title>

    <!-- favicon
        ============================================ -->
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
    <!-- touchspin CSS
        ============================================ -->
    <link rel="stylesheet" href="css/touchspin/jquery.bootstrap-touchspin.min.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="css/form/themesaller-forms.css">
    <!-- colorpicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/colorpicker/colorpicker.css">
    <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="css/select2/select2.min.css">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="css/chosen/bootstrap-chosen.css">
    <!-- ionRangeSlider CSS
        ============================================ -->
    <link rel="stylesheet" href="css/ionRangeSlider/ion.rangeSlider.css">
    <link rel="stylesheet" href="css/ionRangeSlider/ion.rangeSlider.skinFlat.css">
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
</head>

<body>

    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <?php include'left-sidebar-pro.php';?>
    </div>
    
    <div class="all-content-wrapper">
        <?php include'all-content-wrapper.php';?>
<div class="content-fluid">
        
         
        
  
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>Avaliar o seu Tutor</h1>
                                </div>
                            </div>
                            <div class="sparkline10-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    
                                            <div class="chosen-select-single mg-b-20" >
                                                <label>Selecione o seu Tutor</label>
                                                <form action="msgTutor.php" method="POST" >
                                                        <select  data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" name="idPessoa" required>
                                                            <option value="">Procurar</option>
                                                            <?php
                                                             foreach($consumo->Tutor as $item){
                                                            ?> 
                                                                <option value="<?php echo $item->idPessoa; ?>"><?php echo  $item->Tutor; ?></option>
                                                             <?php }  ?>
                                                        </select>
                                                        <br><br>
                                                        <h1 class="text-center">Coloque a Potuação do seu Tutor<h1>
                                                        <div class="estrelas text-center" >
				<input type="radio" id="vazio" name="estrela" value="" checked required>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
				
				
			</div>
          

            <div class="form-group">
              <label for=""></label>
              <input type="text" class="form-control" name="obs" id="" aria-describedby="helpId" placeholder="Comentario" required>
              
            </div>
            <input class="btn btn-primary" type="submit" value="Enviar" data-toggle="modal" data-target="#modalExemplo">
                                                    </form>
                                                
                                                </div>
 

                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Static Table Start -->
        <div class="static-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  

                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                
                                
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
    </div>



        <!-- Advanced Form End-->
   

<!-- Modal -->



        <div class="footer-copyright-area">
            <?php include'footer-copyright-area.php';?>
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
    <!-- touchspin JS
        ============================================ -->
    <script src="js/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="js/touchspin/touchspin-active.js"></script>
    <!-- colorpicker JS
        ============================================ -->
    <script src="js/colorpicker/jquery.spectrum.min.js"></script>
    <script src="js/colorpicker/color-picker-active.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- input-mask JS
        ============================================ -->
    <script src="js/input-mask/jasny-bootstrap.min.js"></script>
    <!-- chosen JS
        ============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>
    <script src="js/chosen/chosen-active.js"></script>
    <!-- select2 JS
        ============================================ -->
    <script src="js/select2/select2.full.min.js"></script>
    <script src="js/select2/select2-active.js"></script>
    <!-- ionRangeSlider JS
        ============================================ -->
    <script src="js/ionRangeSlider/ion.rangeSlider.min.js"></script>
    <script src="js/ionRangeSlider/ion.rangeSlider.active.js"></script>
    <!-- rangle-slider JS
        ============================================ -->
    <script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="js/rangle-slider/rangle-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/knob-active.js"></script>
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
