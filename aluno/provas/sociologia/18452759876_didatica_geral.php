<?php session_start(); 

    $bread = '/ Provas / Sociologia';
    $active = ['', '', ''];

    include("../../GetListaAvisos.php");
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
        header('Location: login.php');
        exit();
    }


?>
<!DOCTYPE html>
<html class="no-js" lang="pt-BR">

<head>
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

    <title>Provas - Sociologia | Polo Fácil</title>

    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../css/owl.theme.css">
    <link rel="stylesheet" href="../../css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../../css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../../css/calendar/fullcalendar.print.min.css">
    <!-- modals CSS
    ============================================ -->
    <link rel="stylesheet" href="../../css/modals.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="../../style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="../../js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="../../painel.php"><img class="main-logo" src="../../img/logo/pf_logo.png" alt="" /></a>
                <strong><a href="../../painel.php"><img src="../../img/logo/pf_logosn.png" alt="" /></a></strong>
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
                            <a class="has-arrow" href="index.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Agendamento</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Provas" href="../../agendar_provas.php"><span class="mini-sub-pro">Agendar Provas</span></a></li>
                                <li><a title="Meus Agendamentos" href="../../meusAgendamentos.php"><span class="mini-sub-pro">Meus Agendamentos</span></a></li>
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
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Meus Dados</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Students Profile" href="../../dadosdoAluno.php"><span class="mini-sub-pro">Perfil do Aluno</span></a></li>
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
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Minhas Apostilas</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="../../apostilaEntregue.php"><span class="mini-sub-pro">Apostilas Entregues</span></a></li>
                                <li><a title="Add Library" href="../../apostilaDisponivel.php"><span class="mini-sub-pro">Novas Apostilas</span></a></li>
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
                            <a  aria-expanded="false" href="../../provas/1.php"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non"> Provas</span></a>
                            
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
                            <a href="../../logout.php" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Sair</span></a>
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
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="../painel.php"><img class="main-logo" src="../../img/logo/pf_logo.png" alt="" /></a>
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
                                                                                    <img src="../../img/logo/logosn.png" alt="">
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
                                                                                    <img src="../../img/logo/logosn.png" alt="">
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
                                                            <li><a href="../../dadosdoAluno.php"><span class="edu-icon edu-home-admin author-log-ic"></span>Meus Dados</a>
                                                            </li>
                                                            </li>
                                                            <li><a href="../../logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Sair</a>
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
                                                    <li><a href="../../agendar_provas.php">Agendar Provas</a></li>
                                                    <li><a href="../../meusAgendamentos.php">Meus Agendamentos</a></li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demopro" href="#">Meus Dados <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demopro" class="collapse dropdown-header-top">
                                                    <li><a href="../../dadosdoAluno.php">Perfil do Aluno</a>
                                                    </li>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demolibra" href="#">Minhas Apostilas <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demolibra" class="collapse dropdown-header-top">
                                                    <li><a href="../../apostilaEntregue.php">Apostilas Entregues</a>
                                                    </li>
                                                    <li><a href="../../apostilaDisponivel.php">Novas Apostilas</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="../../provas/1.php">Provas <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
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
                                                <li><a href="../../painel.php">Início</a>
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
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="custom-pagination">
                            <ul class="pagination">
                                <li class="pd-setting"><a class="page-link" href="index.php">Voltar</a></li>
                            </ul>
                        </div>
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
                                       <strong><span class="font-extra-bold">Código da Prova: </span> 18452759876</strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">Curso: </span> Sociologia (Licenciatura)</strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">Série ou Período: </span> 2º Bimestre - 3º Semestre</strong>
                                    </div>
                                     <div>
                                        <strong><span class="font-extra-bold">I -Questões objetivas –valendo  10,00 pontos Gerada em: 04/06/2018 14:03:34s</span></strong>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel-body panel-csm">
                                <div>
                                    <h4>Questões de múltipla escolha </h4>

                                    <p>Disciplina: 545320 - Didática Geral</p>

                                    <p><strong>Questão 1:</strong> De acordo com uma classificação adotada por Piletti (2010), como são classificados os recursos?</br>
                                    </br>

                                    A) Recursos financeiros: dinheiro etc.; recursos humanos: pessoas etc.</br>

                                    B) Recursos casuais: objetos selecionados; recursos premiados: escolhidos pela diretoria.</br>

                                    C) Recursos primários; recursos secundários e recursos terciários.</br>

                                    D) Recursos abstratos; recursos não abstratos.</br>

                                    E) Recursos visuais: projeções, cartazes, gravuras etc.; recursos auditivos: rádio, gravações etc.; recursos audiovisuais: cinema, televisão etc.</br>
                                    </br>

                                    </p>

                                    <p><strong>Questão 2:</strong> Qual a diferença entre instrução e ensino?</br>
                                    </br>

                                    A) A instrução está ligada aos papéis que vem junto com alguns produtos que compramos, já o ensinoé quando temos um professor para ensinar, para não termos de aprender sozinhos. </br>

                                    B) A instrução é ligada à formação intelectual e o desenvolvimento da capacidade de conhecer. O ensino corresponde às ações, meios e condições para que se possa instruir.</br>

                                    C) A instrução é ligada a todas as situações que precisamos pedir maiores informações, pois somente com elas estaremos instruídos. O ensino é aquilo que fazem os pais nos primeiros anos de vida de seus filhos.</br>

                                    D) A instrução é um manual inventado por algum sujeito que o elabora, na perspectiva de favorecer o uso de determinados aparelhos eletrônicos. O ensino é semelhante à educação, pois ensinar é o mesmo que educar.</br>

                                    E) Instrução é o mesmo que comando, pois quando se instrui alguém você o comanda. O ensino é ação de proporcionar a alguém uma capacidade elementar de pensamento e linguagem.</br>
                                    
                                    </br>
                                    </p>

                                    <p><strong>Questão 3:</strong> Quais os principais detalhes da forma de escrever os objetivos, tanto gerais quanto específicos?</br>
                                    </br>

                                    A) Escolher características, saber escrevê-los e ter uma boa organização.</br>

                                    B) Lembrar que estamos falando das capacidades que terão ao final do processo; utilizar sempre um verbo no infinitivo; lembrar que deve se referir sempre aos comportamentos dos alunos, nunca do professor.</br>

                                    C) Não se explica como se escreve os objetivos, como forma de não desestimular a criatividade do professor.</br>

                                    D) Escrever claramente e encaixar com o plano dos outros professores.</br>

                                    E) Selecionar habilidades, capacidades e o que mais o professor for desenvolver.</br>
                                    </br>

                                    </p>

                                    <p><strong>Questão 4:</strong> Quais são as duas funções educativas citadas por Haydt (2002)?</br>
                                    </br>

                                    A) Função de educar e função de instruir. Uma é complementar a outra.</br>

                                    B) F unção incentivadora, ou seja, aproveitar a curiosidade natural do aluno para despertar seu interesse e mobilizar seus esquemas cognitivos; função orientadora: orientar os esforços do aluno para aprender, ajudando-o a construir seu conhecimento .</br>

                                    C) Função de ensinar e função de capacitar. Juntas possuem maior efeito.</br>

                                    D) Função de motivar: dar apoio em todos os momentos; função de criar: dar condições de os alunos participarem criativamente.</br>

                                    E) Função de apoio: estar sempre perto dos alunos; função de auxílio: criar pontos de intervenção.</br>
                                    </br>

                                    </p>

                                    <p><strong>Questão 5:</strong> Sobre a Pedagogia Progressista, julgue as alternativas no que se refere a tal tendênciapedagógica.</br>
                                    </br>

                                    I -O termo progressista é usado aqui para designar as tendências que, partindo de uma análise crítica das realidades sociais, sustentam implicitamente as finalidades sociopolíticas da educação. Evidentemente, ela não tem como institucionalizar numa sociedade capitalista; daí ser um instrumento de luta dos professores aolado de outras práticas sociais.</br>

                                    II -A pedagogia progressista tem se manifestado em três tendências: a libertadora, mais conhecidacomo pedagogia de Paulo Freire; a libertária, que reúne os defensores da autogestão pedagógica; a crítico-social dos conteúdos que, diferentemente das anteriores, acentua a primazia dos conteúdos no seu confronto com as realidades sociais.</br>

                                    III -O ensino corresponde às ações, meios e condições para realização da instrução; contém, pois,a instrução.</br>

                                    IV -Trata-se de uma pedagogia com caráter transformador, pois capacita os sujeitos a compreenderem melhor sua realidade social e os trata como sujeitos com potencial para luta em favor de uma transformação da vida em sociedade.</br>
                                    </br>

                                    Estão corretas as afirmações:</br>
                                    </br>

                                    A) I, II e III, apenas.</br>

                                    B) I e IV, apenas.</br>

                                    C) II e III, apenas.</br>

                                    D) I, II e IV, apenas.</br>

                                    E) II, III e IV, apenas.</br>
                                    </br>

                                    </p>

                                    <p><strong>Questão 6:</strong> A Pedagogia Liberal não tem o sentido de “avançado”, “democrático”, “aberto”, como costuma ser usado.</br>
                                    </br>

                                    Neste sentido, podemos entender que:I -Esta pedagogia entende a vida como ela é, pela forma de liberar os educandos de suas responsabilidades acadêmicas, fazendo com que os alunos possam aprender de maneira livre e autorizada pelos professores, que, ao invés de restringir aos trâmites da escola, libera tudo e todos das grandes cargas educacionais.</br>

                                    II -A doutrina liberal apareceu como justificativa do sistema capitalista que, ao defender a predominância da liberdade e dos interesses individuais da sociedade, estabeleceu uma forma de organização social baseada na propriedade privada dos meios de produção, também denominada sociedade de classes.</br>

                                    III -A pedagogia liberal sustenta a ideia de que a escola tem por função preparar os indivíduos para o desempenho de papéis sociais, de acordo com as aptidões individuais, por isso os indivíduos precisam aprender ase adaptar aos valores e às normas vigentes da sociedade de classe por meio do desenvolvimento da cultura individual.</br>

                                    IV -A ênfase no aspecto cultural esconde a realidade das diferenças de classes, pois, embora difunda a ideia de igualdade de oportunidades, não leva em conta a desigualdade de condições.</br>
                                    </br>

                                    Estão corretas as afirmações:</br>
                                    </br>

                                    A) I e III, apenas.</br>

                                    B) I e II, apenas.</br>

                                    C) II e III, apenas.</br>

                                    D) I, II e IV, apenas.</br>

                                    E) II, III e IV, apenas.</br>
                                    </br>

                                    </p>

                                    <p><strong>Questão 7:</strong> Comênio foi o primeiro educador a formular a ideia da difusão dos conhecimentos a todos e criar princípios e regras de ensino. O que ele quis dizer com a frase: “Em primeiro lugar as coisas, depois as palavras”?</br>
                                    </br>

                                    A) A assimilação é feita pela incorporação dos dados da realidade nos esquemas disponíveis no sujeito, é o processo pelo qual as ideias, pessoas e costumes são incorporados à atividade do sujeito.</br> 

                                    B) A incorporação é a principal forma de atividade mental. Foi isso que Comênio quis deixar mais claro.</br>

                                    C) A interiorização é feita antes pela vida em casa, com os pais, as palavras se aprendem na escola.</br>

                                    D) Quis dizer que não é importante o como as que se aprende.</br>

                                    E) O conhecimento deve ser adquirido a partir da observação das coisas e dos fenômenos, utilizandoe desenvolvendo sistematicamente os órgãos dos sentidos.</br>
                                    </br>

                                    <p>

                                    <p><strong>Questão 8:</strong> Qual a diferença entre planejamento e plano?</br>
                                    </br>

                                    A) O planejamento é uma meta a ser estabelecida. O plano é aquilo que se estabelece para curtoprazo.</br>

                                    B) O planejamento são as atividades a serem aplicadas. O plano é apenas uma aula.</br>

                                    C) O planejamento é um processo mental que envolve análise, reflexão e previsão. O plano é o resultado desse processo, podendo ou não assumir uma forma escrita.</br>

                                    D) O planejamento é uma forma de elaborar uma aula, selecionando maneiras de aplicá-la. O plano é o conjunto de recursos a serem envolvidos no processo.</br>

                                    E) O planejamento é apenas uma unidade de ensino. O plano é todo o processo de escolarização.</br>
                                    </br>

                                    </p>

                                    <p><strong>Questão 9:</strong> Qual a diferença entre método e procedimentos?</br>
                                    </br>

                                    A) Método é a maneira de efetuar algo, procedimentos são um caminho a seguir para se alcançar um fim. </br>

                                    B) Método é uma descrição dos meios disponíveis pelo professor para atingir os objetivos específicos, procedimentos são o que para o professor acaba por ser um roteiro geral para a atividade.</br>

                                    C) Método é uma forma de operacionalizar o método, procedimentos são um caminho que leva até certoponto, não sendo o veículo de chegada, pois este é a técnica.</br>

                                    D) Método é um caminho a seguir para se alcançar um fim, procedimentos são as maneiras de efetuar algo.</br>

                                    E) Método é um jeito de trabalhar, procedimentos são as formas de organizar todo o percurso de planejamento. </br>
                                    </br>

                                    </p>

                                    <p><strong>Questão 10:</strong> O que é Educação em sentido amplo?</br>
                                    </br>

                                    A) É a vontade do indivíduo, a criação proporcionada.</br>

                                    B) É semelhante a moral e bons costumes.</br>

                                    C) São os bons modos, adquiridos no contato com a família.</br>

                                    D) É muito semelhante à cultura, pois é um fenômeno e um processo social.</br>

                                    E) É o que surge do amor dos pais, pela dedicação em cuidar de seus filhos. </br>
                                </div>
                            </div>
                            <div class="custom-pagination">
                                <ul class="pagination">
                                    <li class="pd-setting"><a class="page-link" href="index.php">Voltar</a></li>
                                </ul>
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
                url: '../../PutAviso.php?idAviso='+id_aviso,
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
    <script>
 
    function imAnAjaxFunction(){
     
        var request = $.ajax({
            url: 'phpfile.php',
            type: 'get',
            dataType: 'html'
        });
     
        request.done( function ( data ) {
            $('#ajaxButton').html( data );
        });
     
        request.fail( function ( jqXHR, textStatus) {
            console.log( 'Sorry: ' + textStatus );
        });
     
    }
     
    </script>
    <!-- jquery
        ============================================ -->
    <script src="../../js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="../../js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="../../js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="../../js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="../../js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="../../js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="../../js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="../../js/counterup/jquery.counterup.min.js"></script>
    <script src="../../js/counterup/waypoints.min.js"></script>
    <script src="../../js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="../../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="../../js/metisMenu/metisMenu.min.js"></script>
    <script src="../../js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="../../js/morrisjs/raphael-min.js"></script>
    <script src="../../js/morrisjs/morris.js"></script>
    <script src="../../js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="../../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../../js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="../../js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="../../js/calendar/moment.min.js"></script>
    <script src="../../js/calendar/fullcalendar.min.js"></script>
    <script src="../../js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="../../js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="../../js/main.js"></script>
</body>

</html>