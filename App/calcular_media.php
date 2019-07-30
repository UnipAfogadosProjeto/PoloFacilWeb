<?php



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="polo fácil unip oline">
    <meta name="author" content="vse tecnologia">
    <meta name="keywords" content="gerenciamente de polos ead">

    <title>UNIP - Cálculo de Média - Online </title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
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
  

    <body>
    

<div class="content-fluid">
        <div class="row">
        
                    <div class="col-lg-auto col-md-12 col-sm-auto col-xs-11 bg-white">
                    
                        <div class="breadcome-list">
                       
                            <div class="sparkline10-hd">
                            
                                <div class="main-sparkline10-hd">
                
                                <h1 class="text-center   ">UNIP - Cálculo de Média - Online</h1>
                              <br>

    
    
    
       
          <div class="row ">           


          <div class="col-lg-4 " >
            
            <div div class="card border-danger mb-4" >
                   <div class="card-header text-white text-center bg-danger">BACHARELADO/LICENCIATURA</div>
                
                           <form  action="resultadoBL.php" method="POST" class="form-signin">
                           
                               <br>
                               <div class="col-auto">
                  <div class="form-label-group mx-sm-5 mb-3 text-center">
                        <label>Nota Prova</label>
                    <input  type="text" step="0.01" min="0" max="10" pattern="[0-9]+([,\.][0-9]+)?" id="" class="form-control" name="n_prova" placeholder="" required>
                  </div>
                  </div>
                  <div class="col-auto">
                  <div class="form-label-group mx-sm-5 mb-3 text-center">
                        <label>Nota AVA</label>
                        <input  type="text" step="0.01"  min="0" max="10" pattern="[0-9]+([,\.][0-9]+)?" id="" class="form-control" name="n_ava" placeholder="" required>
                  </div>
                    </div>

                    <div class="col-auto">
                  <div class="form-label-group mx-sm-5 mb-3 text-center">
                        <label>Nota Exame</label>
                        <input  type="text" step="0.01" min="0" max="10" pattern="[0-9]+([,\.][0-9]+)?" id="" class="form-control" name="n_exame" value="0" placeholder="" required>
                   </div>
                   </div>
                            
                            <div class="col-auto">
                      <div class="form-label-group mx-sm-5 mb-3">
                <button type="submit" class="btn btn-block btn-danger text-uppercase">Calcular!</button>
                      </div>
                      </div>
              </div>
            </div>
            </form>
         


                
    <!--Gestão-->   
    <div class="col-lg-4 ">
                <div div class="card border-success mb-3" >
                    <div class="card-header text-white text-center bg-success ">GESTÃO</div>
                   
                      <form action="resultadoG.php" method="POST" class="form-signin">
                          <br>  
                          <div   class="col-auto">
               <div class="form-label-group mx-sm-5 mb-3 text-center">
              <label >Nota Prova</label>
                <input type="text" step="0.01" min="0" max="10" id="" pattern="[0-9]+([,\.][0-9]+)?" class="form-control" name="n_prova"  placeholder="" required autofocus>
               </div>
                          </div>
                  
                          <div class="col-auto">      
              <div class="form-label-group mx-sm-5 mb-3 text-center">
              <label>Nota AVA</label>
                <input type="text" step="0.01" min="0" max="10" id="" pattern="[0-9]+([,\.][0-9]+)?" class="form-control"   name="n_ava"  placeholder="" required>
              </div>
                          </div>

                          <div class="col-auto">
              <div class="form-label-group mx-sm-5 mb-3 text-center">
              <label>Nota PIM</label>
                <input type="text" step="0.01" min="0" max="10" id="" pattern="[0-9]+([,\.][0-9]+)?" class="form-control" name="n_pim"  placeholder="" required autofocus> 
              </div>
                          </div>

                          <div class="col-auto">
              <div class="form-label-group mx-sm-5 mb-3 text-center">
              <label>Nota Exame</label>
                <input type="text" step="0.01" min="0" max="10" id="" class="form-control" name="n_exame" value="0" placeholder="" required>
              </div>      
                          </div>
                
                  <div class="col-auto">
                      <div class="form-label-group mx-sm-5 mb-3">
                <button type="submit"    class="btn btn-block btn-success text-uppercase">Calcular!</button>
                      </div>
                  </div>
          </div>
          </div>
          </form>
<!--FIM Gestão -->
          
                <div class="col-lg-4 ">
              <div div class="card border-primary mb-3" >
                <div class="card-header text-white text-center bg-primary">PÓS</div>
                
                <form action="resultadoPOS.php" method="POST" class="form-signin">
                    <br>
                    <div class="col-auto">
              <div class="form-label-group mx-sm-5 mb-3 text-center">
              <label>Nota Prova</label>
                <input  type="text" step="0.01" min="0" max="10" id="" pattern="[0-9]+([,\.][0-9]+)?" class="form-control" name="n_prova"  placeholder="" required autofocus>
                    </div>
              </div>
              <div class="col-auto">
              <div class="form-label-group mx-sm-5 mb-3 text-center">
              <label>Nota AVA</label>
              
              <input  type="text" step="0.01" min="0" max="10" id="" pattern="[0-9]+([,\.][0-9]+)?" class="form-control" name="n_ava" value="0" placeholder="" required>
         
              </div>
              </div>
              
              <div class="col-auto">
                      <div class="form-label-group mx-sm-5 mb-3">
                <button class="btn btn-block btn-primary text-uppercase">Calcular!</button>
                </div>
                </div>

          </div>
            </div>
            </form>
          


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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>