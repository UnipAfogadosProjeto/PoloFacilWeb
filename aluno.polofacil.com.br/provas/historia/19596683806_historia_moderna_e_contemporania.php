<?php session_start(); 

    $bread = '/ Provas / História / HISTÓRIA MODERNA E CONTEMPORÂNEA';
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

    <title>Provas - História - HISTÓRIA MODERNA E CONTEMPORÂNEA | Polo Fácil</title>

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
                                        <strong><span class="font-extra-bold">UNIP EAD</span></strong>
                                    </div>
                                    <div>
                                       <strong><span class="font-extra-bold">Código da Prova: </span> 19596683806</strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">Curso: </span> HISTÓRIA (LICENCIATURA)</strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">Série ou Período: </span> 1º Bimestre - 3º Semestre</strong>
                                    </div>
                                     <div>
                                        <strong><span class="font-extra-bold">I -Questões objetivas –valendo  10,00 pontos Gerada em: 01/04/2019 11:42:44</span></strong>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel-body panel-csm">
                                <div>
                                    <h4>Questões de múltipla escolha </h4>

                                    <p>Disciplina: 679260 - HISTÓRIA MODERNA E CONTEMPORÂNEA </p>

                                    <p><strong>Questão 1:</strong> No início da Idade Moderna, as transformações que ocorriam na Europa não eram apenas econômicas, mas também sociais, políticas, culturais, artísticas, além de religiosas. O protestantismo contribuiu para o rompimento da hegemonia da Igreja Católica e as figuras de Lutero e Calvino têm grande relevância nesse momento. Em se tratando do calvinismo, as principais mudanças econômicas, advindas da nova relação entre trabalho, riqueza e religião, foram: </br>
                                    </br>

                                    A) a valorização da riqueza, como um indício de salvação, introduziu um novo comportamento em que a poupança e o esforço para se acumular capitais foram peças essenciais na estruturação do capitalismo.</br>  

                                    B) o calvinismo, por derivar do catolicismo, condenava o empréstimo a juros, tornando muito vagarosa a mudança de mentalidade rumo à acumulação de capitais. </br>

                                    C) uma vez que a riqueza era a garantia da salvação, quaisquer faltas ou pecados seriam perdoados,desde que o indivíduo fosse rico o suficiente. </br>

                                    D) o calvinismo mantinha a preocupação com o pecado da usura; por isso, o moralismo religioso impedia a dinamização das relações econômicas na Suíça, a qual se deu apenas na Inglaterra e Holanda. </br>

                                    E) apesar das mudanças econômicas, poucas foram as transformações mentais ao início da época Moderna, pois a Igreja Católica conseguia resistir às críticas dos reformadores.</br>

                                    </br>
                                    </p>

                                    <p><strong>Questão 2:</strong> A Inglaterra, tradicionalmente lembrada por seu grande desenvolvimento material, precisa ser problematizada quanto às origens de sua riqueza, principalmente daquela que alavancou a Revolução Industrial. Como aspectos fundamentais dos mecanismos de acumulação podemos considerar:</br>
                                    </br>

                                    A) o comércio marítimo, a pirataria, a existência de colônias e a acumulação de metais na metrópole, quer seja por saldos positivos, quer por saques contra outros países, como a Espanha, por exemplo. </br>

                                    B) a produção industrial com máquinas a vapor de tecidos de algodão para abastecer as colônias.</br>

                                    C) a agricultura monoexportadora açucareira, devido, principalmente, às suas áreas litorâneas. </br>

                                    D) a exclusivamente a ovinocultura, em função da importância dessa atividade, a partir do estabelecimento do Tratado de Methuen ou Panos e Vinhos com Portugal. </br>

                                    E) a rígida exploração econômica, nos quadros do Antigo Sistema Colonial, das colônias britânicas ao norte da América do Norte, proporcionando um intenso arrocho colonial desde o início da exploração. </br>

                                    </br>
                                    </p>

                                    <p><strong>Questão 3:</strong> Podemos considerar que as cidades existem desde o início das primeiras civilizações, variando bastante quanto à sua forma de organização espacial, a distribuição da população no espaço e mesmo quanto ao comércio e as trocas nelas desenvolvido. Na Antiguidade, eram o locusem que se dava a sociabilidade e a cidadania, sofrendo um constante esvaziamento, entretanto, na Idade Média. O impulso que as cidades testemunharam entre o final da Idade Média e o início da Idade Moderna pode ser corretamente associado ao fato de que:</br>
                                    </br>

                                    A) as cidades tornaram-se centros exclusivos de produção, monopolizando as riquezas que circulavame transformando a burguesia em classe hegemônica.</br> 

                                    B) o desenvolvimento do poder religioso da Igreja Católica combateu os protestantes que ameaçavam sua hegemonia religiosa e social. </br>

                                    C) a produção para o mercado consumidor passa a se desenvolver a partir de centros urbanos, surgindo corporações de ofício e, nas cidades, a burguesia dedica-se à obtenção de lucros.</br>   

                                    D) a burguesia que vivia nas cidades passa a desprezar o modo de vida da nobreza, concorrendo, assim, contra a aristocracia e recusando completamente seus sistemas de valores.</br> 

                                    E) a nobreza ignorava as mudanças sociais provocadas pelo fortalecimento do comércio, passando a viver, cada vez mais, em seus castelos, distantes do mundo urbano.</br>

                                    </p>

                                    <p><strong>Questão 4:</strong> Rosa Luxemburgo, tratando da Primeira Guerra Mundial teria dito que sua principal consequência foi a Revolução Russa. Tal afirmativa pode ser considerada válida se:</br>
                                    </br>

                                    A) for levado em conta que o regime czarista russo se fortaleceu no contexto da Primeira Guerra e em seu esforço para se manter no conflito foi visto pelos demais países europeus como grande potência política e social.</br> 

                                    B) for considerado que a Rússia conseguiu sair incólume, sendo posteriormente dominada pelo anti-comunismo. </br>

                                    C) For aceita a ideia de que não é possível superar,  sem entrar em conflito armado, as crises quesurgiram em razão da existência de uma ditadura militar.</br> 

                                    D) For levado em consideração que o comunismo chegou ao poder logo na primeira fase da revolução, quando derrubou os Romanov.</br>

                                    E)  Isso se dever ao fato de que o esgotamento russo, associado à insistência do czarismo em permanecer na Primeira Guerra Mundial, acabou por exaurir completamente a Rússia e formou uma bandeira de grupos esquerdistas para derrubar os regimes absolutista e liberal busca instaurar o comunismo. </br>

                                    </br>

                                    </p>

                                    <p><strong>Questão 5:</strong> No contexto de Renascimento Cultural que se desenvolveu na Europa ao início da Era Moderna surgiram muitas as novidades do ponto de vista do pensamento e da cultura. Assinale a alternativa que melhor expressa essas mudanças:</br>
                                    </br>

                                    A) na permanência do pensamento Escolástico Medieval, visto que as universidades foram sempre dominadas pela Igreja Católica. </br>

                                    B) na revalorização da cultura clássica greco-romana, tornando-se fundamental a preocupação com a racionalidade que contribuiria para uma nova visão científica, fundamentada na observação.</br>

                                    C) na significativa valorização da cultura árabe, uma vez que eles mantiveram viva a tradição clássica, pois, enquanto a maioria da Europa Ocidental era analfabeta ou quase iletrada, os muçulmanos traduziam os clássicos antigos para o árabe.</br> 

                                    D) na ruptura com o princípio medieval de que a arte deveria ser fruto da observação da natureza e, portanto, imitação da realidade.</br> 

                                    E) pelo reconhecimento, por parte dos renascentistas, de que o período Medieval foi de grande relevância, pois, naquele momento, desenvolveram-se as universidades, as artes e as igrejas góticas. </br>

                                    </br>

                                    </p>

                                    <p><strong>Questão 6:</strong> Podemos considerar que diversas revoluções burguesas se sucederam no decorrer dos séculos XVII e XVIII. Primeiro, na Inglaterra -com as revoluções Puritana e Gloriosa e, no século seguinte,a Industrial -, depois na França. Formando um conjunto com Revolução Americana, é possível afirmar que:</br>
                                    </br>

                                    A) Seria impossível compreender esses movimentos se não se tiver como enfoque principal a ideia detriunfo do capitalismo liberal burguês. </br>

                                    B) Apesar da presença da burguesia como grupo social, o caráter religioso da Revolução Gloriosa impediu sua manutenção como poder político na Inglaterra. </br>

                                    C)  A Revolução Francesa acabou por abrir espaço ao retorno da monarquia em seu país e, assim, nãodeve ser compreendido como um movimento burguês. </br>

                                    D) A Revolução Industrial foi desenvolvida nos lanifícios ingleses, sendo a aristocracia a classe dirigente do processo, uma vez que eram tecidos de lã.</br> 

                                    E) Todas elas são sintomas de mudanças no sistema colonial americano, mas que acabaram por fortalecer os Estados Nacionais europeus, dando sobrevida ao Antigo Regime em todos os Estados referidos.</br> 
                                    
                                    </br>

                                    </p>

                                    <p><strong>Questão 7:</strong>É bastante comum a referência ao período da Guerra Fria como um momento marcado pela ausência de confrontos bélicos no pós-Segunda Guerra Mundial. No entanto, essa visão precisa ser problematizada como um olhar mais atento buscando entender que:</br>
                                    </br>

                                    A) de fato, não ocorreram conflitos pois, do contrário, seriam nucleares.</br>  

                                    B) ocorreram diversos conflitos entre o final da Segunda Guerra e a queda do muro de Berlim, ou mesmo o final da URSS, no entanto, eles não foram ser diretos entre as superpotências pois, do contrário, seriam conflitos nucleares. </br>

                                    C) os Estados Unidos foram vitoriosos em todos os conflitos em que se envolveram, conseguindo controlar a expansão do comunismo em todas as partes do mundo. </br>

                                    D) a URSS se uniu à China para formar um bloco único e alinhado contra os Estados Unidos, facilitando a coordenação de ações conjuntas contra os Estados Unidos. </br>

                                    E) foram muito raros os casos de conflitos bélicos, pois as disputas eram muito mais no campo ideológico e na área das tecnologias aeroespaciais e de computação.</br>

                                    </br>

                                    <p>

                                    <p><strong>Questão 8:</strong> John Locke, ao definir os limites do poder do soberano, estabelece limites para o exercício do poder. Para ele o uso contínuo da força e a não execução daquilo que é esperado em termos do bem de todos dão ao povo o direito legítimo de resistir e a guerra declarada pelo povo em relação ao governo é o último recurso de quem não pode mais apelar a nada, a não ser à justiça de Deus.</br>
                                    </br>

                                    Sobre o direito exposto, é correto afirmar que:</br>
                                    </br>

                                    A) Locke não se preocupava demasiado com a questão de rebeldias, pois viveu em um período de significativa tranquilidade social na Inglaterra. </br>

                                    B) O soberano poderia sofrer limitações e, em alguns casos, seriam legítimas determinadas formas de rebelião.</br>

                                    C) Locke fundamenta o direito de rebelião exclusivamente em aspectos religiosos, como uma necessidade de se fazer justiça divina. </br>

                                    D) Locke defende o levante popular para chegar ao poder e essa forma de rebeldia tornar-se-á um dos fundamentos do comunismo no século XIX. </br>

                                    E) No trecho exposto, o fundamento para a rebeldia era exclusivamente econômico.</br>
                                    
                                    </br>

                                    </p>

                                    <p><strong>Questão 9:</strong> Nos anos iniciais do século XX, a euforia pelo progresso econômico tomou conta de diversas sociedades. Nenhuma euforia, entretanto, superou a que prevaleceu nos Estados Unidos. O resultado mundial da especulação e desse descontrole econômico foi a Crise de 1929. Para sair dela, o governo estadunidense de Franklin Delano Roosevelt recorreu ao New Deal. A respeito dos mecanismos para o país superar essa crise é incorretoafirmar que: </br>
                                    </br>

                                    A) se criou um gigantesco programa de obras públicas para a construção de escolas, estradas, hospitais e aeroportos.</br>

                                    B) foi mantido o pleno liberalismo econômico como eixo da ação econômica do governo recém-eleito. </br>

                                    C) o governo resolveu arbitrar os conflitos entre empresários com o objetivo de fazer acertos em relação aos níveis de produção e de preços.</br>

                                    D) se institui um salário-mínimo como forma de assegurar a sobrevivência das pessoas em condições básicas.</br>

                                    E) em alguns casos bancos renegociaram dívidas de pequenos proprietários de terras ou aumentaram aconcessão de créditos aos fazendeiros.</br>

                                    </br>

                                    </p>

                                    <p><strong>Questão 10:</strong> Encerrada a Segunda Guerra Mundial com o lançamento das bombas atômicas sobre Hiroshima e Nagasaki, um novo capítulo da História mundial abriu-se com a chamada Doutrina Truman. Como desdobramento de política adotada pelos Estados Unidos, podemos afirmar que:</br>
                                    </br>

                                    A) O comunismo conseguiu se implantar em diversos países europeus do Ocidente uma vez que a luta contra o nazismo permitiu o avanço de grupos de esquerda.</br> 

                                    B) O presidente dos Estados Unidos, Truman, permitiu que dentro de seu país os comunistas pudessemse manifestar livremente. </br>

                                    C) As tensões entre capitalismo e comunismo se tornaram cada vez mais agudas, constituindo-se, inclusive, como um dos fatores que provocou a chamada Guerra Fria.  </br>

                                    D) Em função da explosão das bombas atômicas, os Estados Unidos mantiveram-se por muito tempo comoa única potência nuclear; apenas na década de 1970, a URSS tornou-se sua concorrente. </br>

                                    E) A Doutrina Truman defendia a livre manifestação de opiniões políticas, inclusive de anarquistas, comunistas e socialistas, uma vez que os Estados Unidos davam amplos direitos sociais a todos os seus habitantes,independentemente de orientação política ou de origem étnica. </br>

                                    
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