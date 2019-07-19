<?php
    session_start();

    $bread = '/ Apostilas Entreges';
    $active = ['', '', 'active'];

    $ra = $_SESSION['RA'];
    $consumo1 = curl_init();
    curl_setopt($consumo1, CURLOPT_URL, "http://186.233.148.102:8080/GetListaApostila/$ra/1");
    curl_setopt($consumo1, CURLOPT_RETURNTRANSFER, true);    
    $res = curl_exec($consumo1);
    curl_close($consumo1);
    $consumo = utf8_encode($res);
    $consumo = json_decode($consumo);


 
 
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
                
  

                                <div class="static-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Apostilas Entregue no Polo</h1>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr class="bg-primary">
                                                <th>Codigo</th>
                                                <th>Disciplina</th>
                                                <th>Entregue</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                          
                                            foreach($consumo->Apostilas as $item){
                                            //while ($objetoLocacao = array_shift($listaLocacao)) {?>   
                                                
                                            <tr class="bg-info">
                                                <td class="col-md-1"><?php echo "".$item->Codigo."";?></td>
                                                <td class="col-md-1"><?php echo "".$item->Disciplina."";?></td>
                                                <td class="col-md-1"><?php echo "".$item->Entregue."";?></td>
                                                <td class="col-md-1">
               
                                                </td>
                                            </tr>
                                          <?php
                                            }
                                          ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




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




