<?php
 session_start();


$bread = '/ Provas / Administração 1';
$active = ['', '', '', 'active'];


include("../GetListaAvisos.php");
if($_SESSION['Nome'] != null & empty($_SESSION['Nome']) == false){
    $ra = $_SESSION['RA'];
    $temAviso = false;
    $msgList = GetLista($ra);
    if($msgList->Avisos != "Sem Avisos"){
        $temAviso = true;
    }else{
        $temAviso = false;
    }

}else{

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

    <title>Dashboard | Polo Fácil</title>

    <!-- favicon
        ============================================ -->
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../css/calendar/fullcalendar.print.min.css">
    <!-- touchspin CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/touchspin/jquery.bootstrap-touchspin.min.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/datapicker/datepicker3.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/form/themesaller-forms.css">
    <!-- colorpicker CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/colorpicker/colorpicker.css">
    <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/select2/select2.min.css">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/chosen/bootstrap-chosen.css">
        <!-- modals CSS
    ============================================ -->
    <link rel="stylesheet" href="../css/modals.css">
    <!-- ionRangeSlider CSS
        ============================================ -->
    <link rel="stylesheet" href="../css/ionRangeSlider/ion.rangeSlider.css">
    <link rel="stylesheet" href="../css/ionRangeSlider/ion.rangeSlider.skinFlat.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="../style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="../painel.php"><img class="main-logo" src="../img/logo/pf_logo.png" alt="" /></a>
                <strong><a href="../painel.php"><img src="../img/logo/pf_logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <!--<li class="active">
                            <a class="has-arrow" href="index.html">
                                   <span class="educate-icon educate-home icon-wrap"></span>
                                   <span class="mini-click-non">Education</span>
                                </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Dashboard v.1</span></a></li>
                                <li><a title="Dashboard v.2" href="index-1.html"><span class="mini-sub-pro">Dashboard v.2</span></a></li>
                                <li><a title="Dashboard v.3" href="index-2.html"><span class="mini-sub-pro">Dashboard v.3</span></a></li>
                                <li><a title="Analytics" href="analytics.html"><span class="mini-sub-pro">Analytics</span></a></li>
                                <li><a title="Widgets" href="widgets.html"><span class="mini-sub-pro">Widgets</span></a></li>
                            </ul>
                        </li>-->
                        <li <?php echo 'class="'.$active[0].'"'; if($active[0] == 'active'){ echo 'style="background-color: #F6F6F6;"';}?>>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Agendamento</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Provas" href="../agendar_provas.php"><span class="mini-sub-pro">Agendar Provas</span></a></li>
                                <li><a title="Meus Agendamentos" href="meusAgendamentos.php"><span class="mini-sub-pro">Meus Agendamentos</span></a></li>
                            </ul>
                        </li >
                        <!--<li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">All Professors</span></a></li>
                                <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Add Professor</span></a></li>
                                <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">Edit Professor</span></a></li>
                                <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Professor Profile</span></a></li>
                            </ul>
                        </li>-->
                        <li <?php echo 'class="'.$active[1].'"'; if($active[1] == 'active'){ echo 'style="background-color: #F6F6F6;"';}?>>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Meus Dados</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Students Profile" href="../dadosdoAluno.php"><span class="mini-sub-pro">Perfil do Aluno</span></a></li>
                            </ul>
                        </li>
                        <!--<li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="all-courses.html"><span class="mini-sub-pro">All Courses</span></a></li>
                                <li><a title="Add Courses" href="add-course.html"><span class="mini-sub-pro">Add Course</span></a></li>
                                <li><a title="Edit Courses" href="edit-course.html"><span class="mini-sub-pro">Edit Course</span></a></li>
                                <li><a title="Courses Profile" href="course-info.html"><span class="mini-sub-pro">Courses Info</span></a></li>
                                <li><a title="Product Payment" href="course-payment.html"><span class="mini-sub-pro">Courses Payment</span></a></li>
                            </ul>
                        </li>-->
                        <li <?php echo 'class="'.$active[2].'"'; if($active[2] == 'active'){ echo 'style="background-color: #F6F6F6;"';}?>>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Minhas Apostilas</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="../apostilaEntregue.php"><span class="mini-sub-pro">Apostilas Entregues</span></a></li>
                                <li><a title="Add Library" href="../apostilaDisponivel.php"><span class="mini-sub-pro">Novas Apostilas</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false" data-toggle="modal" data-target="#ModalSimulados"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Simulados</span></a>
                            <!--<ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Departments List" href="departments.html"><span class="mini-sub-pro">Departments List</span></a></li>
                                <li><a title="Add Departments" href="add-department.html"><span class="mini-sub-pro">Add Departments</span></a></li>
                                <li><a title="Edit Departments" href="edit-department.html"><span class="mini-sub-pro">Edit Departments</span></a></li>
                            </ul>-->
                        </li>
                        <!--<li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">View Mail</span></a></li>
                                <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Interface</span></a>
                            <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false">
                                <li><a title="Google Map" href="google-map.html"><span class="mini-sub-pro">Google Map</span></a></li>
                                <li><a title="Data Maps" href="data-maps.html"><span class="mini-sub-pro">Data Maps</span></a></li>
                                <li><a title="Pdf Viewer" href="pdf-viewer.html"><span class="mini-sub-pro">Pdf Viewer</span></a></li>
                                <li><a title="X-Editable" href="x-editable.html"><span class="mini-sub-pro">X-Editable</span></a></li>
                                <li><a title="Code Editor" href="code-editor.html"><span class="mini-sub-pro">Code Editor</span></a></li>
                                <li><a title="Tree View" href="tree-view.html"><span class="mini-sub-pro">Tree View</span></a></li>
                                <li><a title="Preloader" href="preloader.html"><span class="mini-sub-pro">Preloader</span></a></li>
                                <li><a title="Images Cropper" href="images-cropper.html"><span class="mini-sub-pro">Images Cropper</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Charts</span></a>
                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                <li><a title="Bar Charts" href="bar-charts.html"><span class="mini-sub-pro">Bar Charts</span></a></li>
                                <li><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Line Charts</span></a></li>
                                <li><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Area Charts</span></a></li>
                                <li><a title="Rounded Charts" href="rounded-chart.html"><span class="mini-sub-pro">Rounded Charts</span></a></li>
                                <li><a title="C3 Charts" href="c3.html"><span class="mini-sub-pro">C3 Charts</span></a></li>
                                <li><a title="Sparkline Charts" href="sparkline.html"><span class="mini-sub-pro">Sparkline Charts</span></a></li>
                                <li><a title="Peity Charts" href="peity.html"><span class="mini-sub-pro">Peity Charts</span></a></li>
                            </ul>
                        </li>-->
                        <li>
                            <a  href="administracao_1_1.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non"> Provas</span></a>
                            
                        </li>

                        <!--<li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Forms Elements</span></a>
                            <ul class="submenu-angle form-mini-nb-dp" aria-expanded="false">
                                <li><a title="Basic Form Elements" href="basic-form-element.html"><span class="mini-sub-pro">Bc Form Elements</span></a></li>
                                <li><a title="Advance Form Elements" href="advance-form-element.html"><span class="mini-sub-pro">Ad Form Elements</span></a></li>
                                <li><a title="Password Meter" href="password-meter.html"><span class="mini-sub-pro">Password Meter</span></a></li>
                                <li><a title="Multi Upload" href="multi-upload.html"><span class="mini-sub-pro">Multi Upload</span></a></li>
                                <li><a title="Text Editor" href="tinymc.html"><span class="mini-sub-pro">Text Editor</span></a></li>
                                <li><a title="Dual List Box" href="dual-list-box.html"><span class="mini-sub-pro">Dual List Box</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap"></span> <span class="mini-click-non">App views</span></a>
                            <ul class="submenu-angle app-mini-nb-dp" aria-expanded="false">
                                <li><a title="Notifications" href="notifications.html"><span class="mini-sub-pro">Notifications</span></a></li>
                                <li><a title="Alerts" href="alerts.html"><span class="mini-sub-pro">Alerts</span></a></li>
                                <li><a title="Modals" href="modals.html"><span class="mini-sub-pro">Modals</span></a></li>
                                <li><a title="Buttons" href="buttons.html"><span class="mini-sub-pro">Buttons</span></a></li>
                                <li><a title="Tabs" href="tabs.html"><span class="mini-sub-pro">Tabs</span></a></li>
                                <li><a title="Accordion" href="accordion.html"><span class="mini-sub-pro">Accordion</span></a></li>
                            </ul>
                        </li>-->
                        <li id="removable">
                            <a href="./logout.php" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Sair</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <div id="ModalSimulados" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                    <div class="modal-body">
                        <i class="educate-icon educate-checked modal-check-pro"></i>
                        <h2>Aviso!</h2>
                        <p><?php echo $_SESSION['Nome'];?> , no momento a página Simulados não esta disponivel.</p>
                    </div>
                    <div class="modal-footer">
                        <a data-dismiss="modal" href="#">Está bem</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="painel.php"><img class="main-logo" src="img/logo/pf_logo.png" alt="" /></a>
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
                                                <!--<ul class="nav navbar-nav mai-top-nav">
                                                    <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                    </li>
                                                    <li class="nav-item dropdown res-dis-nn">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                        <div role="menu" class="dropdown-menu animated zoomIn">
                                                            <a href="#" class="dropdown-item">Documentation</a>
                                                            <a href="#" class="dropdown-item">Expert Backend</a>
                                                            <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                            <a href="#" class="dropdown-item">Contact Support</a>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                    </li>
                                                </ul>-->
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="header-right-info">
                                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                    <li class="nav-item dropdown">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><?php if($temAviso){ echo '<span class="indicator-ms"></span>';}else{echo '<span class="ms"></span>';} ?></a>
                                                        <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                            <div class="message-single-top">
                                                                <h1>Mensagens</h1>
                                                            </div>
                                                            <ul class="message-menu">
                                                                <?php
                                                                  
                                                                    if($temAviso){
                                                                        foreach($msgList->Avisos as $item){
                                                                            
                                                                        ?>   
                                                                        <li>
                                                                            <a href="#" data-toggle="modal" data-target="<?php echo 'Modal'.$item->idAviso;?>">
                                                                                <div class="message-img">
                                                                                    <img src="img/logo/logosn.png" alt="">
                                                                                </div>
                                                                                <div class="message-content">
                                                                                    
                                                                                    <h2><?php echo "".$item->Titulo."";?></h2>
                                                                                    <span style="font-size: 10px;" class="message"><?php echo "".$item->DataEnvio."";?></span>
                                                                                    <p><?php echo "".$item->Mensagem."";?></p>

                                                                                    <button id='<?php echo $item->idAviso;?>'  onClick ='marcarComoLida(<?php echo $item->idAviso;?>)' class="btn btn-default btn-sm"><i class="fa fa-check"></i> Marca como lida</button>
                                                                                </div>
                                                                            </a>
                                                                        </li>                                                     
                                                                        <?php
                                                                        }
                                                                    } else {
                                                                    ?>  
                                                                    
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="message-img">
                                                                                    <img src="img/logo/logosn.png" alt="">
                                                                                </div>
                                                                                <div class="message-content">
                                                                                    <p>Você não tem mensagens no momento.</p>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                                                                                                                                                    
                                                                    <?php 
                                                                    }
                                                                ?>
                                                                <!--<li>
                                                                    <a href="#">
                                                                        <div class="message-img">
                                                                            <img src="img/contact/4.jpg" alt="">
                                                                        </div>
                                                                        <div class="message-content">
                                                                            <span class="message-date">16 Sept</span>
                                                                            <h2>Sulaiman din</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="message-img">
                                                                            <img src="img/contact/3.jpg" alt="">
                                                                        </div>
                                                                        <div class="message-content">
                                                                            <span class="message-date">16 Sept</span>
                                                                            <h2>Victor Jara</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="message-img">
                                                                            <img src="img/contact/2.jpg" alt="">
                                                                        </div>
                                                                        <div class="message-content">
                                                                            <span class="message-date">16 Sept</span>
                                                                            <h2>Victor Jara</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>-->
                                                            </ul>
                                                            <div class="message-view">
                                                                <a href="#">Ver todas as mensagens</a>
                                                            </div>
                                                        </div>
                                                        <?php
                                                                  
                                                        if($temAviso){
                                                            foreach($msgList->Avisos as $item){
                                                                
                                                            ?>   
                                                            
                                                            <div id="<?php echo 'Modal'.$item->idAviso;?>" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-close-area modal-close-df">
                                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <i class="educate-icon educate-checked modal-check-pro"></i>
                                                                            <h2><?php echo "".$item->Titulo."";?></h2>
                                                                            <small><?php echo "".$item->DataEnvio."";?></small>
                                                                            <p><?php echo "".$item->Mensagem."";?></p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <a data-dismiss="modal" href="#">Cancel</a>
                                                                            <button id='<?php echo $item->idAviso;?>'  onClick ='marcarComoLida(<?php echo $item->idAviso;?>)' class="btn btn-default btn-sm"><i class="fa fa-check"></i> Marca como lida</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php 
                                                            } 
                                                        ?>

                                                    <?php 
                                                        } 
                                                    ?>
                                                    </li>
                                                    <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator"></span></a>
                                                        <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                            <div class="notification-single-top">
                                                                <h1>Notificações</h1>
                                                            </div>
                                                            <ul class="notification-menu">
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="notification-icon">
                                                                            <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="notification-content">
                                                                            <p>Você não tem notificações no momento.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <!--<li>
                                                                    <a href="#">
                                                                        <div class="notification-icon">
                                                                            <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="notification-content">
                                                                            <span class="notification-date">16 Sept</span>
                                                                            <h2>Sulaiman din</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="notification-icon">
                                                                            <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="notification-content">
                                                                            <span class="notification-date">16 Sept</span>
                                                                            <h2>Victor Jara</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="notification-icon">
                                                                            <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="notification-content">
                                                                            <span class="notification-date">16 Sept</span>
                                                                            <h2>Victor Jara</h2>
                                                                            <p>Please done this project as soon possible.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>-->
                                                            </ul>
                                                            <div class="notification-view">
                                                                <a href="#">Ver todas as notificações</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                                <!--<img src="img/product/pro4.jpg" alt="" />-->
                                                                <span class="admin-name"><?php echo $_SESSION['Nome'];?></span>
                                                                <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                            </a>
                                                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                            <li><a href="./dadosdoAluno.php"><span class="edu-icon edu-home-admin author-log-ic"></span>Meus Dados</a>
                                                            </li>
                                                            </li>
                                                            <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Sair</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>

                                                        <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                            <ul class="nav nav-tabs custon-set-tab">
                                                                <li class="active"><a data-toggle="tab" href="#Notes">Notas</a>
                                                                </li>
                                                                <li><a data-toggle="tab" href="#Projects">Projetos</a>
                                                                </li>
                                                                <<li><a data-toggle="tab" href="#Settings">Configurações</a>
                                                                </li>
                                                            </ul>

                                                            <div class="tab-content custom-bdr-nt">
                                                                <div id="Notes" class="tab-pane fade in active">
                                                                    <div class="notes-area-wrap">
                                                                        <div class="note-heading-indicate">
                                                                            <h2><i class="fa fa-comments-o"></i> Últimas Notas</h2>
                                                                            <p>Você não tem notas no momento.</p>
                                                                        </div>
                                                                        <div class="notes-list-area notes-menu-scrollbar">
                                                                            <ul class="notes-menu-list">
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="notes-list-flow">
                                                                                            <div class="notes-img">
                                                                                                <img src="img/contact/4.jpg" alt="" />
                                                                                            </div>
                                                                                            <div class="notes-content">
                                                                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                <span>Yesterday 2:45 pm</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="notes-list-flow">
                                                                                            <div class="notes-img">
                                                                                                <img src="img/contact/1.jpg" alt="" />
                                                                                            </div>
                                                                                            <div class="notes-content">
                                                                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                <span>Yesterday 2:45 pm</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="notes-list-flow">
                                                                                            <div class="notes-img">
                                                                                                <img src="img/contact/2.jpg" alt="" />
                                                                                            </div>
                                                                                            <div class="notes-content">
                                                                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                <span>Yesterday 2:45 pm</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="notes-list-flow">
                                                                                            <div class="notes-img">
                                                                                                <img src="img/contact/3.jpg" alt="" />
                                                                                            </div>
                                                                                            <div class="notes-content">
                                                                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                <span>Yesterday 2:45 pm</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="notes-list-flow">
                                                                                            <div class="notes-img">
                                                                                                <img src="img/contact/4.jpg" alt="" />
                                                                                            </div>
                                                                                            <div class="notes-content">
                                                                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                <span>Yesterday 2:45 pm</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="notes-list-flow">
                                                                                            <div class="notes-img">
                                                                                                <img src="img/contact/1.jpg" alt="" />
                                                                                            </div>
                                                                                            <div class="notes-content">
                                                                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                <span>Yesterday 2:45 pm</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="notes-list-flow">
                                                                                            <div class="notes-img">
                                                                                                <img src="img/contact/2.jpg" alt="" />
                                                                                            </div>
                                                                                            <div class="notes-content">
                                                                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                <span>Yesterday 2:45 pm</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="notes-list-flow">
                                                                                            <div class="notes-img">
                                                                                                <img src="img/contact/1.jpg" alt="" />
                                                                                            </div>
                                                                                            <div class="notes-content">
                                                                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                <span>Yesterday 2:45 pm</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="notes-list-flow">
                                                                                            <div class="notes-img">
                                                                                                <img src="img/contact/2.jpg" alt="" />
                                                                                            </div>
                                                                                            <div class="notes-content">
                                                                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                <span>Yesterday 2:45 pm</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="notes-list-flow">
                                                                                            <div class="notes-img">
                                                                                                <img src="img/contact/3.jpg" alt="" />
                                                                                            </div>
                                                                                            <div class="notes-content">
                                                                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                <span>Yesterday 2:45 pm</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="Projects" class="tab-pane fade">
                                                                    <div class="projects-settings-wrap">
                                                                        <div class="note-heading-indicate">
                                                                            <h2><i class="fa fa-cube"></i> Últimos Projetos</h2>
                                                                            <p> Você não tem projetos no momento.</p>
                                                                        </div>
                                                                        <div class="project-st-list-area project-st-menu-scrollbar">
                                                                            <ul class="projects-st-menu-list">
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="project-list-flow">
                                                                                            <div class="projects-st-heading">
                                                                                                <h2>Web Development</h2>
                                                                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                <span class="project-st-time">1 hours ago</span>
                                                                                            </div>
                                                                                            <div class="projects-st-content">
                                                                                                <p>Completion with: 28%</p>
                                                                                                <div class="progress progress-mini">
                                                                                                    <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-1"></div>
                                                                                                </div>
                                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="project-list-flow">
                                                                                            <div class="projects-st-heading">
                                                                                                <h2>Software Development</h2>
                                                                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                <span class="project-st-time">2 hours ago</span>
                                                                                            </div>
                                                                                            <div class="projects-st-content project-rating-cl">
                                                                                                <p>Completion with: 68%</p>
                                                                                                <div class="progress progress-mini">
                                                                                                    <div style="width: 68%;" class="progress-bar hd-tp-2"></div>
                                                                                                </div>
                                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="project-list-flow">
                                                                                            <div class="projects-st-heading">
                                                                                                <h2>Graphic Design</h2>
                                                                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                <span class="project-st-time">3 hours ago</span>
                                                                                            </div>
                                                                                            <div class="projects-st-content">
                                                                                                <p>Completion with: 78%</p>
                                                                                                <div class="progress progress-mini">
                                                                                                    <div style="width: 78%;" class="progress-bar hd-tp-3"></div>
                                                                                                </div>
                                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="project-list-flow">
                                                                                            <div class="projects-st-heading">
                                                                                                <h2>Web Design</h2>
                                                                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                <span class="project-st-time">4 hours ago</span>
                                                                                            </div>
                                                                                            <div class="projects-st-content project-rating-cl2">
                                                                                                <p>Completion with: 38%</p>
                                                                                                <div class="progress progress-mini">
                                                                                                    <div style="width: 38%;" class="progress-bar progress-bar-danger hd-tp-4"></div>
                                                                                                </div>
                                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="project-list-flow">
                                                                                            <div class="projects-st-heading">
                                                                                                <h2>Business Card</h2>
                                                                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                <span class="project-st-time">5 hours ago</span>
                                                                                            </div>
                                                                                            <div class="projects-st-content">
                                                                                                <p>Completion with: 28%</p>
                                                                                                <div class="progress progress-mini">
                                                                                                    <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-5"></div>
                                                                                                </div>
                                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="project-list-flow">
                                                                                            <div class="projects-st-heading">
                                                                                                <h2>Ecommerce Business</h2>
                                                                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                <span class="project-st-time">6 hours ago</span>
                                                                                            </div>
                                                                                            <div class="projects-st-content project-rating-cl">
                                                                                                <p>Completion with: 68%</p>
                                                                                                <div class="progress progress-mini">
                                                                                                    <div style="width: 68%;" class="progress-bar hd-tp-6"></div>
                                                                                                </div>
                                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="project-list-flow">
                                                                                            <div class="projects-st-heading">
                                                                                                <h2>Woocommerce Plugin</h2>
                                                                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                <span class="project-st-time">7 hours ago</span>
                                                                                            </div>
                                                                                            <div class="projects-st-content">
                                                                                                <p>Completion with: 78%</p>
                                                                                                <div class="progress progress-mini">
                                                                                                    <div style="width: 78%;" class="progress-bar"></div>
                                                                                                </div>
                                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <div class="project-list-flow">
                                                                                            <div class="projects-st-heading">
                                                                                                <h2>Wordpress Theme</h2>
                                                                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                <span class="project-st-time">9 hours ago</span>
                                                                                            </div>
                                                                                            <div class="projects-st-content project-rating-cl2">
                                                                                                <p>Completion with: 38%</p>
                                                                                                <div class="progress progress-mini">
                                                                                                    <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                                </div>
                                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="Settings" class="tab-pane fade">
                                                                    <div class="setting-panel-area">
                                                                        <div class="note-heading-indicate">
                                                                            <h2><i class="fa fa-gears"></i> Painel de COnfigurações</h2>
                                                                            <p> You have 20 Settings. 5 not completed.</p>
                                                                        </div>
                                                                        <ul class="setting-panel-list">
                                                                            <li>
                                                                                <div class="checkbox-setting-pro">
                                                                                    <div class="checkbox-title-pro">
                                                                                        <h2>Show notifications</h2>
                                                                                        <div class="ts-custom-check">
                                                                                            <div class="onoffswitch">
                                                                                                <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                                <label class="onoffswitch-label" for="example">
                                                                                                        <span class="onoffswitch-inner"></span>
                                                                                                        <span class="onoffswitch-switch"></span>
                                                                                                    </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="checkbox-setting-pro">
                                                                                    <div class="checkbox-title-pro">
                                                                                        <h2>Disable Chat</h2>
                                                                                        <div class="ts-custom-check">
                                                                                            <div class="onoffswitch">
                                                                                                <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                                <label class="onoffswitch-label" for="example3">
                                                                                                        <span class="onoffswitch-inner"></span>
                                                                                                        <span class="onoffswitch-switch"></span>
                                                                                                    </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="checkbox-setting-pro">
                                                                                    <div class="checkbox-title-pro">
                                                                                        <h2>Enable history</h2>
                                                                                        <div class="ts-custom-check">
                                                                                            <div class="onoffswitch">
                                                                                                <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                                <label class="onoffswitch-label" for="example4">
                                                                                                        <span class="onoffswitch-inner"></span>
                                                                                                        <span class="onoffswitch-switch"></span>
                                                                                                    </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="checkbox-setting-pro">
                                                                                    <div class="checkbox-title-pro">
                                                                                        <h2>Show charts</h2>
                                                                                        <div class="ts-custom-check">
                                                                                            <div class="onoffswitch">
                                                                                                <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                                <label class="onoffswitch-label" for="example7">
                                                                                                        <span class="onoffswitch-inner"></span>
                                                                                                        <span class="onoffswitch-switch"></span>
                                                                                                    </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="checkbox-setting-pro">
                                                                                    <div class="checkbox-title-pro">
                                                                                        <h2>Update everyday</h2>
                                                                                        <div class="ts-custom-check">
                                                                                            <div class="onoffswitch">
                                                                                                <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                                <label class="onoffswitch-label" for="example2">
                                                                                                        <span class="onoffswitch-inner"></span>
                                                                                                        <span class="onoffswitch-switch"></span>
                                                                                                    </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="checkbox-setting-pro">
                                                                                    <div class="checkbox-title-pro">
                                                                                        <h2>Global search</h2>
                                                                                        <div class="ts-custom-check">
                                                                                            <div class="onoffswitch">
                                                                                                <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                                <label class="onoffswitch-label" for="example6">
                                                                                                        <span class="onoffswitch-inner"></span>
                                                                                                        <span class="onoffswitch-switch"></span>
                                                                                                    </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="checkbox-setting-pro">
                                                                                    <div class="checkbox-title-pro">
                                                                                        <h2>Offline users</h2>
                                                                                        <div class="ts-custom-check">
                                                                                            <div class="onoffswitch">
                                                                                                <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                                <label class="onoffswitch-label" for="example5">
                                                                                                        <span class="onoffswitch-inner"></span>
                                                                                                        <span class="onoffswitch-switch"></span>
                                                                                                    </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>-->
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
                                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Agendamento <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul class="collapse dropdown-header-top">
                                                    <li><a href="agendar_provas.php">Agendar Provas</a></li>
                                                    <li><a href="meusAgendamentos.php">Meus Agendamentos</a></li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demopro" href="#">Meus Dados <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demopro" class="collapse dropdown-header-top">
                                                    <li><a href="dadosdoAluno.php">Perfil do Aluno</a>
                                                    </li>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demolibra" href="#">Minhas Apostilas <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demolibra" class="collapse dropdown-header-top">
                                                    <li><a href="apostilaEntregue.php">Apostilas Entregues</a>
                                                    </li>
                                                    <li><a href="apostilaDisponivel.php">Novas Apostilas</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Provas <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
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
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="breadcome-heading">
                                                <form role="search" class="sr-input-func">
                                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <ul class="breadcome-menu">
                                                <li><a href="./painel.php">Início</a>
                                                </li>
                                                <li><span class="bread-blod"><?php echo $bread ?></span>
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
        </div>
        <div class="mailbox-view-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="hpanel shadow-inner responsive-mg-b-30">
                            <div class="panel-body">
                                <hr>
                                <ul class="mailbox-list">
                                    <li>
                                        <label>Pesquisar provas</label>
                                    </li>
                                    <li>
                                        <input type="text" class="form-control" name="" id="input-search" placeholder="Digite aqui...">
                                    </li>
                                    <li>
                                        <a><input type="checkbox"  id="chk-ignore-case" value="false"> Ignore Case</a>
                                    </li>

                                    <li>
                                        <a><input type="checkbox" id="chk-reveal-results" value="false"> Mostar Resultatos</a>
                                    </li>
                                </ul>
                                <a class="btn btn-success compose-btn btn-block m-b-md" id="btn-search">Pesquisar</a>
                                <a class="btn btn-success compose-btn btn-block m-b-md" style="margin-top: 10px;" id="btn-clear-search">Limpar</a>
                                <hr>
                                <ul class="mailbox-list">
                                    <li>
                                        <h4>Resultados</h4>
                                        <div id="search-output"></div>
                                    </li>
                                </ul>
                                <hr>
                                <ul class="mailbox-list">
                                    <li>
                                        <h4>Arquivos</h4>
                                        <div id="treeview-searchable" class=""></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="hpanel email-compose mailbox-view">
                            <div class="panel-heading hbuilt">

                                <div class="p-xs h4">
                                    <small class="pull-right view-hd-ml">
                                            última atualização (04/08/2019)
                                        </small> Visualizador de provas

                                </div>
                            </div>
                            <div class="border-top border-left border-right bg-light">
                                <div class="p-m custom-address-mailbox">

                                    <div>
                                        <strong><span class="font-extra-bold">UNIP INTERATIVA</span></strong>
                                    </div>
                                    <div>
                                       <strong><span class="font-extra-bold">Código da Prova: </span> 18712394097</strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">Curso: </span> ADMINISTRAÇÃO</strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">Série ou Período: </span> : 2º Bimestre - 1º Semestre</strong>
                                    </div>
                                     <div>
                                        <strong><span class="font-extra-bold">I - Questões objetivas – valendo 5,00 pontos</span></strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">II - Questões discursivas – valendo 5,00 pontos Gerada em: 05/06/2018 15:10:33</span></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body panel-csm">
                                <div>
                                    <h4>Questões de múltipla escolha </h4>

                                    <p>Disciplina: 623960 - Economia e Negócios</p>

                                    <p><strong>Questão 1:</strong> (ENEM/2007 , FUVEST e UEPG/2007 com modificações). Leia um texto publicado no jornal Gazeta Mercantil. Esse texto é parte de um artigo que analisa algumas situações de crise no mundo, entre elas, a quebra da Bolsa de Nova Iorque em 1929, e foi publicado na época de uma iminente crise financeira no Brasil.</br>

                                    </br>“Deu no que deu. No dia 29 de outubro de 1929, uma terça-feira, praticamente, não havia compradores no pregão de Nova Iorque, só vendedores. Seguiu-se uma crise incomparável: o Produto Interno Bruto dos Estados Unidos caiu de 104 bilhões de dólares em 1929, para 56 bilhões em 1933, coisa inimaginável em nossos dias. O valor do dólar caiu a quase metade. O desemprego elevou-se de 1,5 milhão para 12,5 milhões de trabalhadores - cerca de 25% da população ativa - entre 1929 e 1933. A construção civil caiu 90%. Nove milhões de aplicações, tipo caderneta de poupança, perderam-se com o fechamento dos bancos. Oitenta e cinco mil firmas faliram. Houve saques e norte-americanos que passaram fome. (Gazeta Mercantil, 05/01/1999)” -</br>

                                    </br>Ao citar dados referentes à crise ocorrida em 1929, o texto faz referência ao período em que:</br>

                                    I - A restrição na oferta de petróleo por parte da OPEP atingiu, fortemente, as economias mais desenvolvidas.</br>

                                    II  - A restrição à importação de produtos estrangeiros por parte dos países em desenvolvimento atingiu, fortemente, as economias mais desenvolvidas.</br>

                                    III - Ao período de maior crescimento do Capital, tanto em termos dos países desenvolvidos como em termos dos países em desenvolvimento.</br>

                                    </br>Em relação às afirmativas:</br>

                                    A)  Apenas a I está incorreta.</br>
                                    B)  Apenas a II está incorreta.</br>
                                    C)  Apenas a III está incorreta.</br>
                                    D)  Todas estão corretas.</br>
                                    E)  Todas estão incorretas.</br>
                                    </p>

                                    <p><strong>Questão 2:</strong> A palavra economia deriva do grego oikosnomos (de óikos, casa; nomos, lei) que significa a administração de uma casa, ou do Estado, e pode ser assim definida: Economia é a ciência social que estuda como o indivíduo e a sociedade decidem (escolhem) empregar recursos produtivos escassos na produção de bens (de consumo final durável ou não durável, intermediário ou de capital) e serviços, de modo a distribuí-los entre as várias pessoas e grupos da sociedade, a fim de satisfazer as necessidades humanas. Portanto, estuda o problema da produção e da distribuição de bens e serviços produzidos pela sociedade, para dar atendimento às necessidades de consumo da própria sociedade.</br>

                                    </br>Considere as seguintes afirmativas:</br>

                                    I - Em qualquer sociedade os recursos produtivos são limitados.</br>

                                    II  - As necessidades humanas são ilimitadas e sempre se renovam, por força do próprio crescimento populacional e do contínuo desejo de elevação do padrão de vida.</br>

                                    III - Independente do grau de desenvolvimento do país, nenhum dispõe de todos os recursos necessários para satisfazer todas as necessidades da coletividade.</br>

                                    </br>Sobre essas afirmativas:</br>

                                    A)  Apenas a I está incorreta.</br>
                                    B)  Apenas a II está incorreta.</br>
                                    C)  Apenas a III está incorreta.</br>
                                    D)  Estão incorretas I, II e III.</br>
                                    E) Estão corretas I, II e III.</br>
                                    </p>

                                    <p><strong>Questão 3:</strong> “Sempre o homem experimentou novas necessidades ou descobriu maneiras diferentes de atender a necessidades antigas. Quando as comunidades humanas eram pequenas, acanhadas e, sobretudo, isoladas, a força da tradição de cada uma delas se fazia sentir com maior vigor, os costumes cristalizavam-se e as inovações eram tão lentas a ponto de poderem passar quase despercebidas ao longo de uma geração” (NUSDEO, Fabio - Curso de Economia - Introdução ao Direito Econômico -  . edição, São Paulo, Editora Revista dos Tribunais, 2000, p. 24).</br>

                                    </br>O que o texto acima procura demonstrar?</br>

                                    A)  Que é a partir da Revolução Industrial inglesa, no século XIII, que as necessidades humanas passaram a ser atendidas na sua totalidade; antes desse período, elas eram ilimitadas e atendidas apenas parcialmente.</br>
                                    B)  Que as necessidades humanas sempre foram finitas e sempre puderam ser atendidas na sua totalidade, especialmente porque os recursos para a produção de bens e serviços foram e são ilimitados.</br>
                                    C)   Que a satisfação humana, de forma total, é atendida apenas parcialmente; a razão para que isso aconteça é a escassez de recursos para a produção de bens e serviços.</br>
                                    D)  Que a tecnologia vem promovendo a satisfação total das necessidades ilimitadas dos seres humanos.</br>
                                    E)  Que a economia de mercado é capaz de atender, em maior proporção, às necessidades ilimitadas da sociedade, comparativamente à economia em que a tradição dita as regras de produção e distribuição de bens e serviços.</br>
                                    </p>


                                    <p><strong>Questão 4:</strong> Na sociedade medieval:</br>

                                    </br>I - A economia era o aspecto dominante das relações sociais, apesar da falta de apoio da Igreja à conquista do bem-estar material.</br>
                                    II  - As relações de troca entre os agentes eram realizadas apenas com a autorização das autoridades religiosas. III - Todos os bancos eram de propriedade da Igreja, que estabelecia as taxas de juros para o mercado.</br>

                                    </br>Em relação a essas afirmativas:</br>

                                    A)  Apenas a I está incorreta.</br>
                                    B)  Apenas a II está incorreta.</br>
                                    C)  Apenas a III está incorreta.</br>
                                    D)  Estão corretas I, II e III.</br>
                                    E)  Estão incorretas I, II e III.</br>
                                    </p>


                                    <p><strong>Questão 5:</strong> Em relação às medidas de crescimento e desenvolvimento, podemos afirmar que:</br>

                                    </br>I - O IDH e o índice de Gini são, preferencialmente, mensuradores de desenvolvimento.</br>

                                    II  - O índice de Gini e o PNB per capita são, preferencialmente, mensuradores de crescimento. III - O PNB per capita e o IDH são, preferencialmente, mensuradores de crescimento.</br>

                                    </br>Sobre essas afirmativas:</br>

                                    A)   Apenas a I está incorreta.</br>
                                    B)   Apenas a II está incorreta.</br>
                                    C)   Apenas a III está correta.</br>
                                    D)   Estão corretas I, II e III.</br>
                                    E)   Estão incorretas I, II e III.</br>
                                    </p>


                                    <p><strong>Questão 6:</strong> A respeito das curvas de possibilidades de produção, podemos afirmar que:</br>

                                    </br>I - Em cada ponto de uma dada curva, temos combinações diferentes da produção de dois bens.</br>

                                    II - O deslocamento de uma dada curva só pode ocorrer se houver mudança no estoque dos fatores de produção.</br>

                                    III - O deslocamento em uma dada curva nos permite calcular o custo de oportunidade de deixar de produzir determinada quantidade de bem.</br>

                                    </br>Em relação a essas afirmativas:</br>

                                    A)   Apenas a I está incorreta.</br>
                                    B)   Apenas a II está incorreta.</br>
                                    C)   Apenas a III está correta.</br>
                                    D)   Estão corretas I, II e III.</br>
                                    E)   Estão incorretas I, II e III.</br>
                                    </p>


                                    <p><strong>Questão 7:</strong> Thomas Malthus foi um dos mais importantes pensadores do período clássico da história do pensamento econômico. A respeito de suas ideias, podemos dizer que:</br>

                                    </br>A)   ele buscou mostrar como o estoque de alimentos sempre crescerá a uma taxa inversamente proporcional ao crescimento da população.</br>
                                    B)   ele buscou mostrar como o estoque de alimentos cresce a uma taxa geométrica, enquanto a população cresce a taxas aritméticas.</br>
                                    C)  ele buscou mostrar como o estoque de alimentos e a população crescem a uma mesma taxa aritmética.</br>
                                    D)  ele buscou mostrar como o estoque de alimentos cresce a uma taxa aritmética, enquanto a população cresce a taxas geométricas.</br>
                                    E)  ele buscou mostrar como o estoque de alimentos e a população crescem a uma mesma taxa geométrica.</br>
                                    </p>


                                    <p><strong>Questão 8:</strong> A Curva de Demanda reflete os desejos dos consumidores em adquirir os bens e serviços que necessitam. Neste sentido, podemos caracterizar que a demanda por um determinado bem depende:</br>

                                    </br>I - Apenas do preço que está sendo cobrado por esse bem, no mercado.</br>

                                    II - Das características de produção do respectivo bem.</br>

                                    III - De vários fatores, destacando-se o seu preço, o de produtos complementares e substitutos e também das preferências e da renda dos consumidores.</br>

                                    </br>Com base nas proposições, entendemos que:</br>

                                    A)   Todas estão corretas.</br>
                                    B)   II e III estão corretas, apenas.</br>
                                    C)   III está correta, apenas.</br>
                                    D)  I e III estão corretas, apenas.</br>
                                    E)  As três estão incorretas.</br>
                                    </p>

                                    <h4>Questões de múltipla escolha </h4>

                                    <p><strong>Questão 1:</strong> Considerando o assunto sistema econômico, cite e explique as principais características da economia mista.</br>

                                    </p>

                                    <p><strong>Questão 2:</strong> A Conferência das Nações Unidas sobre o Desenvolvimento Sustentável (Rio +20) ocorreu entre os dias 13 e 22 de junho de 2012, na cidade do Rio de Janeiro. Na última semana de março de 2012, o Ministério da Justiça intimou a Associação Brasileira da Indústria de Hotéis do Rio de Janeiro (ABIH-RJ), a Federação Brasileira de Hospedagem e Alimentação (FNHRBS) e o Sindicato de Hotéis, Bares e Restaurantes do Rio (SindRio) a se explicarem quanto à acusação de recusa de prestação de serviços e aumento abusivo de preços. A ABIH-RJ informou que os preços praticados pelos estabelecimentos cariocas estavam apenas seguindo os padrões tarifários de períodos de alta temporada e de grandes eventos, não tendo informações a respeito de estabelecimentos estarem utilizando práticas abusivas de mercado.</br>

                                    </br>I - Apenas do preço que está sendo cobrado por esse bem, no mercado.</br>

                                    II - Das características de produção do respectivo bem.</br>

                                    III - De vários fatores, destacando-se o seu preço, o de produtos complementares e substitutos e também das preferências e da renda dos consumidores.</br>

                                    </br>Com base nisso, explique:</br>

                                    A)  A qual estrutura de mercado o setor hoteleiro se encaixa?</br>
                                    B)  Quais as principais características da estrutura de mercado em que está o setor hoteleiro?</br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2019. Polo Fácil Todos os direitos reservados </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script> 
        function marcarComoLida(id_aviso){
         
            var request = $.ajax({
                url: 'PutAviso.php?idAviso='+id_aviso,
                type: 'get',
                dataType: 'html'
            });
         
            request.done(function(data){
                $('#'+id_aviso).html(data);
            });
         
            request.fail(function(jqXHR, textStatus){
                console.log('Erro: '+textStatus);
            });
         
        }
    </script>
        <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>


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
        <script src="Js/rangle-slider/rangle-active.js"></script>
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

        <script src="js/bootstrap-treeview.js"></script>

        <script type="text/javascript">

                $(function() {

                var defaultData = [
                  {
                    text: 'Administração',
                    href: '#parent1',
                    tags: ['4'],
                    nodes: [
                      {
                        text: '1 Semestre',
                        href: '#Semestre1',
                        tags: ['2'],
                        nodes: [
                          {
                            text: '1 Bimestre',
                            href: '#Bimestre1',
                            tags: ['0']
                          },
                          {
                            text: '2 Bimestre',
                            href: '#Bimestre2',
                            tags: ['0']
                          }
                        ]
                      },
                      {
                        text: '2 Semestre',
                        href: '#Semestre2',
                        tags: ['0']
                      }
                    ]
                  },
                  {
                    text: 'Contabilidadae',
                    href: '#parent2',
                    tags: ['0']
                  },
                  {
                    text: 'Analise de Sistemas',
                    href: '#parent3',
                     tags: ['0']
                  },
                  {
                    text: 'Redes de Computadores',
                    href: '#parent4',
                    tags: ['0']
                  },
                  {
                    text: 'Segurança do Trabalho',
                    href: '#parent5'  ,
                    tags: ['0']
                  }
                ];

                var alternateData = [
                  {
                    text: 'Parent 1',
                    tags: ['2'],
                    nodes: [
                      {
                        text: 'Child 1',
                        tags: ['3'],
                        nodes: [
                          {
                            text: 'Grandchild 1',
                            tags: ['6']
                          },
                          {
                            text: 'Grandchild 2',
                            tags: ['3']
                          }
                        ]
                      },
                      {
                        text: 'Child 2',
                        tags: ['3']
                      }
                    ]
                  },
                  {
                    text: 'Parent 2',
                    tags: ['7']
                  },
                  {
                    text: 'Parent 3',
                    icon: 'glyphicon glyphicon-earphone',
                    href: '#demo',
                    tags: ['11']
                  },
                  {
                    text: 'Parent 4',
                    icon: 'glyphicon glyphicon-cloud-download',
                    href: '/demo.html',
                    tags: ['19'],
                    selected: true
                  },
                  {
                    text: 'Parent 5',
                    icon: 'glyphicon glyphicon-certificate',
                    color: 'pink',
                    backColor: 'red',
                    href: 'http://www.tesco.com',
                    tags: ['available','0']
                  }
                ];

                var json = '[' +
                  '{' +
                    '"text": "Parent 1",' +
                    '"nodes": [' +
                      '{' +
                        '"text": "Child 1",' +
                        '"nodes": [' +
                          '{' +
                            '"text": "Grandchild 1"' +
                          '},' +
                          '{' +
                            '"text": "Grandchild 2"' +
                          '}' +
                        ']' +
                      '},' +
                      '{' +
                        '"text": "Child 2"' +
                      '}' +
                    ']' +
                  '},' +
                  '{' +
                    '"text": "Parent 2"' +
                  '},' +
                  '{' +
                    '"text": "Parent 3"' +
                  '},' +
                  '{' +
                    '"text": "Parent 4"' +
                  '},' +
                  '{' +
                    '"text": "Parent 5"' +
                  '}' +
                ']';


                $('#treeview1').treeview({
                  data: defaultData
                });

                $('#treeview2').treeview({
                  levels: 1,
                  data: defaultData
                });

                $('#treeview3').treeview({
                  levels: 99,
                  data: defaultData
                });

                $('#treeview4').treeview({

                  color: "#428bca",
                  data: defaultData
                });

                $('#treeview5').treeview({
                  color: "#428bca",
                  expandIcon: 'glyphicon glyphicon-chevron-right',
                  collapseIcon: 'glyphicon glyphicon-chevron-down',
                  nodeIcon: 'glyphicon glyphicon-bookmark',
                  data: defaultData
                });

                $('#treeview6').treeview({
                  color: "#428bca",
                  expandIcon: "glyphicon glyphicon-stop",
                  collapseIcon: "glyphicon glyphicon-unchecked",
                  nodeIcon: "glyphicon glyphicon-user",
                  showTags: true,
                  data: defaultData
                });

                $('#treeview7').treeview({
                  color: "#428bca",
                  showBorder: false,
                  data: defaultData
                });

                $('#treeview8').treeview({
                  expandIcon: "glyphicon glyphicon-stop",
                  collapseIcon: "glyphicon glyphicon-unchecked",
                  nodeIcon: "glyphicon glyphicon-user",
                  color: "yellow",
                  backColor: "purple",
                  onhoverColor: "orange",
                  borderColor: "red",
                  showBorder: false,
                  showTags: true,
                  highlightSelected: true,
                  selectedColor: "yellow",
                  selectedBackColor: "darkorange",
                  data: defaultData
                });

                $('#treeview9').treeview({
                  expandIcon: "glyphicon glyphicon-stop",
                  collapseIcon: "glyphicon glyphicon-unchecked",
                  nodeIcon: "glyphicon glyphicon-user",
                  color: "yellow",
                  backColor: "purple",
                  onhoverColor: "orange",
                  borderColor: "red",
                  showBorder: false,
                  showTags: true,
                  highlightSelected: true,
                  selectedColor: "yellow",
                  selectedBackColor: "darkorange",
                  data: alternateData
                });

                $('#treeview10').treeview({
                  color: "#428bca",
                  enableLinks: true,
                  data: defaultData
                });



                var $searchableTree = $('#treeview-searchable').treeview({
                  data: defaultData,
                  enableLinks: true,
                });

                var search = function(e) {
                  var pattern = $('#input-search').val();
                  var options = {
                    ignoreCase: $('#chk-ignore-case').is(':checked'),
                    exactMatch: $('#chk-exact-match').is(':checked'),
                    revealResults: $('#chk-reveal-results').is(':checked')
                  };
                  var results = $searchableTree.treeview('search', [ pattern, options ]);

                  var output = '<p>' + results.length + ' arquivos encontrados</p>';
                  $.each(results, function (index, result) {
                    output += '<a href="' + result.text + '.html">' +result.text+'</a>';
                  });
                  $('#search-output').html(output);
                }

                $('#btn-search').on('click', search);
                $('#input-search').on('keyup', search);

                $('#btn-clear-search').on('click', function (e) {
                  $searchableTree.treeview('clearSearch');
                  $('#input-search').val('');
                  $('#search-output').html('');
                });


                var initSelectableTree = function() {
                  return $('#treeview-selectable').treeview({
                    data: defaultData,
                    multiSelect: $('#chk-select-multi').is(':checked'),
                    onNodeSelected: function(event, node) {
                      $('#selectable-output').prepend('<p>' + node.text + ' was selected</p>');
                    },
                    onNodeUnselected: function (event, node) {
                      $('#selectable-output').prepend('<p>' + node.text + ' was unselected</p>');
                    }
                  });
                };
                var $selectableTree = initSelectableTree();

                var findSelectableNodes = function() {
                  return $selectableTree.treeview('search', [ $('#input-select-node').val(), { ignoreCase: false, exactMatch: false } ]);
                };
                var selectableNodes = findSelectableNodes();

                $('#chk-select-multi:checkbox').on('change', function () {
                  console.log('multi-select change');
                  $selectableTree = initSelectableTree();
                  selectableNodes = findSelectableNodes();          
                });

                // Select/unselect/toggle nodes
                $('#input-select-node').on('keyup', function (e) {
                  selectableNodes = findSelectableNodes();
                  $('.select-node').prop('disabled', !(selectableNodes.length >= 1));
                });

                $('#btn-select-node.select-node').on('click', function (e) {
                  $selectableTree.treeview('selectNode', [ selectableNodes, { silent: $('#chk-select-silent').is(':checked') }]);
                });

                $('#btn-unselect-node.select-node').on('click', function (e) {
                  $selectableTree.treeview('unselectNode', [ selectableNodes, { silent: $('#chk-select-silent').is(':checked') }]);
                });

                $('#btn-toggle-selected.select-node').on('click', function (e) {
                  $selectableTree.treeview('toggleNodeSelected', [ selectableNodes, { silent: $('#chk-select-silent').is(':checked') }]);
                });



                var $expandibleTree = $('#treeview-expandible').treeview({
                  data: defaultData,
                  onNodeCollapsed: function(event, node) {
                    $('#expandible-output').prepend('<p>' + node.text + ' was collapsed</p>');
                  },
                  onNodeExpanded: function (event, node) {
                    $('#expandible-output').prepend('<p>' + node.text + ' was expanded</p>');
                  }
                });

                var findExpandibleNodess = function() {
                  return $expandibleTree.treeview('search', [ $('#input-expand-node').val(), { ignoreCase: false, exactMatch: false } ]);
                };
                var expandibleNodes = findExpandibleNodess();

                // Expand/collapse/toggle nodes
                $('#input-expand-node').on('keyup', function (e) {
                  expandibleNodes = findExpandibleNodess();
                  $('.expand-node').prop('disabled', !(expandibleNodes.length >= 1));
                });

                $('#btn-expand-node.expand-node').on('click', function (e) {
                  var levels = $('#select-expand-node-levels').val();
                  $expandibleTree.treeview('expandNode', [ expandibleNodes, { levels: levels, silent: $('#chk-expand-silent').is(':checked') }]);
                });

                $('#btn-collapse-node.expand-node').on('click', function (e) {
                  $expandibleTree.treeview('collapseNode', [ expandibleNodes, { silent: $('#chk-expand-silent').is(':checked') }]);
                });

                $('#btn-toggle-expanded.expand-node').on('click', function (e) {
                  $expandibleTree.treeview('toggleNodeExpanded', [ expandibleNodes, { silent: $('#chk-expand-silent').is(':checked') }]);
                });

                // Expand/collapse all
                $('#btn-expand-all').on('click', function (e) {
                  var levels = $('#select-expand-all-levels').val();
                  $expandibleTree.treeview('expandAll', { levels: levels, silent: $('#chk-expand-silent').is(':checked') });
                });

                $('#btn-collapse-all').on('click', function (e) {
                  $expandibleTree.treeview('collapseAll', { silent: $('#chk-expand-silent').is(':checked') });
                });



                var $checkableTree = $('#treeview-checkable').treeview({
                  data: defaultData,
                  showIcon: false,
                  showCheckbox: true,
                  onNodeChecked: function(event, node) {
                    $('#checkable-output').prepend('<p>' + node.text + ' was checked</p>');
                  },
                  onNodeUnchecked: function (event, node) {
                    $('#checkable-output').prepend('<p>' + node.text + ' was unchecked</p>');
                  }
                });

                var findCheckableNodess = function() {
                  return $checkableTree.treeview('search', [ $('#input-check-node').val(), { ignoreCase: false, exactMatch: false } ]);
                };
                var checkableNodes = findCheckableNodess();

                // Check/uncheck/toggle nodes
                $('#input-check-node').on('keyup', function (e) {
                  checkableNodes = findCheckableNodess();
                  $('.check-node').prop('disabled', !(checkableNodes.length >= 1));
                });

                $('#btn-check-node.check-node').on('click', function (e) {
                  $checkableTree.treeview('checkNode', [ checkableNodes, { silent: $('#chk-check-silent').is(':checked') }]);
                });

                $('#btn-uncheck-node.check-node').on('click', function (e) {
                  $checkableTree.treeview('uncheckNode', [ checkableNodes, { silent: $('#chk-check-silent').is(':checked') }]);
                });

                $('#btn-toggle-checked.check-node').on('click', function (e) {
                  $checkableTree.treeview('toggleNodeChecked', [ checkableNodes, { silent: $('#chk-check-silent').is(':checked') }]);
                });

                // Check/uncheck all
                $('#btn-check-all').on('click', function (e) {
                  $checkableTree.treeview('checkAll', { silent: $('#chk-check-silent').is(':checked') });
                });

                $('#btn-uncheck-all').on('click', function (e) {
                  $checkableTree.treeview('uncheckAll', { silent: $('#chk-check-silent').is(':checked') });
                });



                var $disabledTree = $('#treeview-disabled').treeview({
                  data: defaultData,
                  onNodeDisabled: function(event, node) {
                    $('#disabled-output').prepend('<p>' + node.text + ' was disabled</p>');
                  },
                  onNodeEnabled: function (event, node) {
                    $('#disabled-output').prepend('<p>' + node.text + ' was enabled</p>');
                  },
                  onNodeCollapsed: function(event, node) {
                    $('#disabled-output').prepend('<p>' + node.text + ' was collapsed</p>');
                  },
                  onNodeUnchecked: function (event, node) {
                    $('#disabled-output').prepend('<p>' + node.text + ' was unchecked</p>');
                  },
                  onNodeUnselected: function (event, node) {
                    $('#disabled-output').prepend('<p>' + node.text + ' was unselected</p>');
                  }
                });

                var findDisabledNodes = function() {
                  return $disabledTree.treeview('search', [ $('#input-disable-node').val(), { ignoreCase: false, exactMatch: false } ]);
                };
                var disabledNodes = findDisabledNodes();

                // Expand/collapse/toggle nodes
                $('#input-disable-node').on('keyup', function (e) {
                  disabledNodes = findDisabledNodes();
                  $('.disable-node').prop('disabled', !(disabledNodes.length >= 1));
                });

                $('#btn-disable-node.disable-node').on('click', function (e) {
                  $disabledTree.treeview('disableNode', [ disabledNodes, { silent: $('#chk-disable-silent').is(':checked') }]);
                });

                $('#btn-enable-node.disable-node').on('click', function (e) {
                  $disabledTree.treeview('enableNode', [ disabledNodes, { silent: $('#chk-disable-silent').is(':checked') }]);
                });

                $('#btn-toggle-disabled.disable-node').on('click', function (e) {
                  $disabledTree.treeview('toggleNodeDisabled', [ disabledNodes, { silent: $('#chk-disable-silent').is(':checked') }]);
                });

                // Expand/collapse all
                $('#btn-disable-all').on('click', function (e) {
                  $disabledTree.treeview('disableAll', { silent: $('#chk-disable-silent').is(':checked') });
                });

                $('#btn-enable-all').on('click', function (e) {
                  $disabledTree.treeview('enableAll', { silent: $('#chk-disable-silent').is(':checked') });
                });



                var $tree = $('#treeview12').treeview({
                  data: json
                });
                });
            </script>
</body>

</html>




