<?php session_start(); 


		 	$ra =	$_SESSION['RA'];
		 	$cpf =	$_SESSION['CPF'];
		 	$nome =	$_SESSION['Nome'];
		 	$curso =	$_SESSION['Curso'];
		 	$situacao =	$_SESSION['Situacao'];
		 	$polo =	$_SESSION['Polo'];
		 	$cep =	$_SESSION['CEP'];
		 	$endereco =	$_SESSION['Endereco'];
		 	$numero =	$_SESSION['Numero'];
		 	$cidade =	$_SESSION['Cidade'];
		 	$celular =	$_SESSION['Celular'];
		 	$email =	$_SESSION['Email'];

      $bread = '/ Meu Perfil';
      $active = ['', 'active', ''];

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
        <!-- modals CSS
    ============================================ -->
    <link rel="stylesheet" href="css/modals.css">
    <!-- ionRangeSlider CSS
        ============================================ -->
    <link rel="stylesheet" href="css/ionRangeSlider/ion.rangeSlider.css">
    <link rel="stylesheet" href="css/ionRangeSlider/ion.rangeSlider.skinFlat.css">
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
<div class="left-sidebar-pro">
        <?php include'left-sidebar-pro.php';?>
    </div>
    
    <div class="all-content-wrapper">
        <?php include'all-content-wrapper.php';?>
<div class="content-fluid">
        <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                
        <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">RA</label>
      <input type="text" class="form-control" id="" placeholder="<?php echo $ra?>" value="<?php echo $ra?>" disabled>
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Nome Completo</label>
      <input type="text" class="form-control" id="" placeholder="<?php echo $nome?>" value="<?php echo $nome?>" disabled>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Situação</label>
      <div class="input-group">
        <input type="text" class="form-control" id="" placeholder="<?php echo $situacao?>" value="<?php echo $situacao?>" aria-describedby="inputGroupPrepend" disabled>
      </div>
      <br>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Curso</label>
      <input type="text" class="form-control" id="" placeholder="<?php echo $curso?>" value="<?php echo $curso?>" disabled >

    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Polo</label>
      <input type="text" class="form-control" id="" placeholder="<?php echo $polo?>" value="<?php echo $polo?>" disabled>
      
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">CEP</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="<?php echo $cep?>" value="<?php echo $cep?>" disabled>
    </div>
  </div>
  <br>
  <div class="form-row">
  
  <div class="col-md-6 mb-3">
  <label for="validationCustom03">Endereco</label>
      <input type="text" class="form-control" id="" placeholder="<?php echo $endereco?>" value="<?php echo $endereco?>" disabled>
 </div>
 <div class="col-md-3 mb-3">
      <label for="validationCustom04">Numero</label>
      <input type="text" class="form-control" id="" placeholder="<?php echo $numero?>" value="<?php echo $numero?>" disabled>  
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04"> Cidade</label>
      <input type="text" class="form-control" id="" placeholder="<?php echo $cidade?>" value="<?php echo $cidade?>" disabled>  
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Celular</label>
      <input type="text" class="form-control" id="" placeholder="<?php echo $celular?>" value="<?php echo $celular?>" disabled>  
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Email</label>
      <input type="text" class="form-control" id="" placeholder="<?php echo $email?>"  value="<?php echo $email?>" disabled>  
      <br>  
    </div>
   
  </div>
  
</form>



</div>
    </div>
            </div>
                    </div>
                            </div>





















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



