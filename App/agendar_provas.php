
<?php 

    session_start(); 
    // pega a data no pc

    date_default_timezone_set('America/Sao_Paulo');
    $time = date('d-m-y');
    //echo $time;
    $idPolo = $_SESSION['idPolo'];

    $data = array();
    
    if($_SESSION['Nome'] != null & empty($_SESSION['Nome']) == false){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://186.233.148.102:8080/GetSalasAgendamento/$idPolo/$time");

        // Se true, esperamos pelo retorno 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Agora, executamos nosso cURL e armazenamos a resposta na variavel $res
        $res = curl_exec($ch);

        // É muito importando fecharmos nossa conexão após a execução.
        curl_close($ch);

        // Agora, vamos decodificar nosso Json
        $datas = utf8_encode($res);
        $data = json_decode($datas);

    }else{
        header('Location: login.php');
    }
// Para para mostra consultar 
//
$c = $_SESSION['RA'];
$consumo = file_get_contents("http://186.233.148.102:8080/GetAgendamentoAluno/$c");
$consumo = utf8_encode($consumo);
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

    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <?php include'left-sidebar-pro.php';?>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <?php include'all-content-wrapper.php';?>
        
        <!-- Advanced Form Start -->
        <div class="advanced-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
                        <div class="sparkline8-list res-mg-b-30 nck-ds nk-ds-n-pro">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Input Knob Dial</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single mg-b-10">
                                                <input type="text" value="75" class="dial" data-fgcolor="#006DF0" data-width="85" data-height="85">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single mg-b-10">
                                                <input type="text" value="25" class="dial" data-fgcolor="#006DF0" data-width="85" data-height="85">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single mg-b-10">
                                                <input type="text" value="50" class="dial" data-fgcolor="#006DF0" data-width="85" data-height="85">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single mg-b-10">
                                                <input type="text" value="75" class="dial" data-fgcolor="#933EC5" data-width="85" data-height="85" data-cursor="true" data-thickness=".3/">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single mg-b-10">
                                                <input type="text" value="25" class="dial" data-fgcolor="#933EC5" data-width="85" data-height="85" data-step="1000" data-min="-15000" data-max="15000" data-displayprevious="true/">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single mg-b-10">
                                                <input type="text" value="60" class="dial" data-fgcolor="#933EC5" data-width="85" data-height="85" data-angleoffset="-125" data-anglearc="250">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single">
                                                <input type="text" value="40" class="dial" data-fgcolor="#D80027" data-width="85" data-height="85">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single">
                                                <input type="text" value="77" class="dial" data-fgcolor="#D80027" data-width="85" data-height="85">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="knob-single">
                                                <input type="text" value="44" class="dial" data-fgcolor="#D80027" data-width="85" data-height="85">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline9-list nck-ds nk-ds-n-pro">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    <h1>ion Range Slider</h1>
                                </div>
                            </div>
                            <div class="sparkline9-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="rangle-slider-single mg-b-20">
                                                <div id="ionrange_1"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="rangle-slider-single mg-b-20">
                                                <div id="ionrange_2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="rangle-slider-single mg-b-20">
                                                <div id="ionrange_3"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="rangle-slider-single">
                                                <div id="ionrange_4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>Agendamento de Provas</h1>
                                </div>
                            </div>
                            <div class="sparkline10-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"">
                                            <div class="chosen-select-single mg-b-20" >
                                                <label>Selecione uma data disponivel para agendar sua prova</label>
                                                <?php $keys = array_keys($data); ?>
                                                <form action="Incluir_Agendamento.php" method="GET" >
                                                    <select  data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" name="IdAp">
                                                        <option value="">Procurar</option>
                                                        <?php if(!empty($data)) {
                                                                for($i = 0; $i < count($data); $i++) {
                                                        ?> 
                                                            <option value="<?php echo $data[$i]->IdAP; ?>"><?php echo  $data[$i]->Complemento; ?></option>
                                                      <?php  } } ?>
                                                        
                                                    </select>
                                                    <button style="margin-top: 20px;"type="subimt" class="btn btn-custon-four btn-success">
                                            <i class="fa fa-check edu-checked-pro" aria-hidden="true"></i> Agendar</button>
                                    
                                                </form>
                                            
                                
                                </div>

        <div class="panel panel-default">
  		<div class="panel-heading">
    		<h2 class="panel-title">Agendamentos</h2>
 	 	</div><!-- fim .panel-heading -->
		
		<div class="panel-body">  
  			<table class="table table-hover.php";>
  				<tr>
                        <th>RA</th>
  						<th>Dia</th>
  						<th>Inicio</th>
  						<th>Fim</th>
  						<th>Sala</th>
  						<th> </th>
  				</tr>
  				<?php
                  foreach($consumo->Agendamento as $item){
  					//while ($objetoLocacao = array_shift($listaLocacao)) {?>	
    				<tr>
    					<td class="col-md-1"><?php echo "".$item->ra."";?></td>
    					<td class="col-md-1"><?php echo "".$item->Dia."";?></td>
    					<td class="col-md-1"><?php echo "".$item->Inicio."";?></td>
    					<td class="col-md-1"><?php echo "".$item->Fim."";?></td>
    					<td class="col-md-1"><?php echo "".$item->Sala."";?></td>
    					<td class="col-md-1">
                        <a class="btn btn-danger"  href="Excluir_Agendamento.php?codigo=<?=$item->idAP ?>" role="button">Excluir</a>  								
    					</td>
                        
    				</tr>
    			<?php
					}
    			?>
    				
    			</table>
    			
 		</div><!-- fim .panel-body -->
	</div><!-- fim .panel -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline11-list mg-tb-30 responsive-mg-t-0 nck-ds nk-ds-n-pro">
                            <div class="sparkline11-hd">
                                <div class="main-sparkline11-hd">
                                    <h1>Select 2</h1>
                                </div>
                            </div>
                            <div class="sparkline11-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="chosen-select-single mg-b-20">
                                                <label>Basic Select</label>
                                                <select class="select2_demo_3 form-control">
                                                        <option>Select</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                    </select>
                                            </div>
                                            <div class="chosen-select-single">
                                                <label>Multi Select</label>
                                                <select class="select2_demo_2 form-control" multiple="multiple">
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Advanced Form End-->

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
