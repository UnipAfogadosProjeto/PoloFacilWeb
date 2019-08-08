<?php session_start(); 

    $bread = '/ Provas / Administração';
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
    <meta charset="utf-8">
    
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="polo fácil unip oline">
    <meta name="author" content="vse tecnologia">
    <meta name="keywords" content="gerenciamente de polos ead">

    <title>Provas - Administração | Polo Fácil</title>

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
                                       <strong><span class="font-extra-bold">Código da Prova: </span> 18956148307</strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">Curso: </span> ADMINISTRAÇÃO</strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">Série ou Período: </span> : 2o Bimestre - 9o Semestre</strong>
                                    </div>
                                     <div>
                                        <strong><span class="font-extra-bold">I - Questões objetivas – valendo 5,00 pontos</span></strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">II - Questões discursivas – valendo 5,00 pontos Gerada em: 05/06/2018 15:17:23</span></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body panel-csm">
                                <div>
                                    <h4>Questões de múltipla escolha </h4>

                                    <p>Disciplina: 539680 - Comportamento Humano nas Organizações</p>

                                    <p><strong>Questão 1:</strong> 
									
									O grupo de trabalho de Paulo nunca permite que surjam conflitos. Diante dessa afirmação, qual dos itens a seguir deve ser verdadeiro?</br>


                                    A) O grupo terá um desempenho superior aos grupos com conflito.</br>
                                    B) O grupo permanecerá na fase tumultuada do desempenho.</br>
                                    C) O grupo terá uma coesão mais baixa do que os grupos em conflito.</br>
                                    D) O grupo poderá sofrer de apatia.</br>
                                    E) O grupo será altamente criativo e inovador.</br>
                                    </p>

                                    <p><strong>Questão 2:</strong>No texto “A complexidade nas organizações: futuro desafio para o psicólogo frente à reestruturação competitiva”, de Tractenberg (1999) realiza-se uma avaliação sobre os programas de reestruturação competitiva aplicados nas organizações nas últimas décadas. No mesmo texto o autor afirma que: “...as principais dificuldades na implementação desses programas (de qualidade e produtividade) recaem sobre a questão das relações humanas, e não sobre aspectos técnicos.” Como podem ser explicadas estas dificuldades?</br>


                                    A) Os processos não são aplicados adequadamente conforme proposta, dada à imperfeição humana.</br>
                                    B) Ainda prevalece uma falta de compreensão do fator humano dentro da organização.</br>
                                    C) Os processos não são aplicados adequadamente em função dos problemas de comunicação entre as lideranças.</br>
                                    D) Os processos são aplicados adequadamente, mas há falhas de gerenciamento nas novas organizações.</br>
                                    E) Como visam só a lucratividade, as empresas exigem demais e acabam ficando sem pessoas importantes, que se demitem.</br>
                                    </p>

                                    <p><strong>Questão 3:</strong> De acordo com Fiorelli uma equipe é um conjunto de pessoas com um senso de identidade, manifestos em comportamentos desenvolvidos e mantidos para o bem individual, apesar da busca por resultados de interesse comum a todos os seus integrantes, decorrentes da atividade mútua de atingir objetivos e metas especificas.</br>

                                    </br>Assim pode-se afirmar que: </br>

                                    A) As duas afirmações são verdadeiras e a segunda justifica a primeira.</br>
                                    B) As duas afirmações são verdadeiras, mas a segunda não justifica a primeira.</br>
                                    C) A primeira afirmação é verdadeira e a segunda falsa. </br>
                                    D) A primeira afirmação é falsa e a segunda verdadeira. </br>
                                    E) As duas afirmações são falsas. </br>
                                    </p>


                                    <p><strong>Questão 4:</strong> Ortega y Gasset afirmam que o “homem é ele”. Embora a forma de ser, sentir e agir do ser humano possa ter aspectos comuns, ela varia imensamente de indivíduo para indivíduo. Abaixo são feitas afirmativas sobre alguns aspectos que podem interferir na forma de ser, sentir e agir de cada um.</br>

                                    </br>I - O lugar de origem das pessoas na pirâmide econômica da sociedade determina seu presente, mas não tem nenhuma interferência no seu futuro. </br>
									</br>II - A história de vida de cada um faz com que cada indivíduo sinta e aja de maneira singular </br>
									</br>III - O grupo social em que o indivíduo está inserido faz do mesmo, um ser diferente dos demais. </br>

                                    </br>Somente está correto o que se afirma em:</br>

                                    A) I</br>
                                    B) II</br>
                                    C) III</br>
                                    D) I e II</br>
                                    E) II e III</br>
                                    </p>


                                    <p><strong>Questão 5:</strong> Analise cada uma das afirmativas relativas a percepção e assinale a alternativa correta.</br>

                                    </br>I - A não percepção do ponto de vista do outro pode acarretar problemas nos níveis prático e relacional.</br>
                                    </br> II - O feedback é um processo importante na percepção, pois por meio dele é possível identificar percepções diferentes sobre uma mesma situação.</br>
                                    </br>III - Em determinadas situações devemos analisar o que é certo e o que é errado, portanto, a percepção nesse momento deve ser desconsiderada. </br>

                                    A) Somente I está correta.</br>
                                    B) Somente II está correta.</br>
                                    C) Somente III está correta.</br>
                                    D) I e II estão corretas.</br>
                                    E) I e III estão coretas.</br>
                                    </p>


                                    <p><strong>Questão 6:</strong> Você estudou sobre motivação e suas teorias. Leia as afirmativas a seguir e assinale a alternativa correta. </br>

                                    </br>I - Motivação é um sistema de crenças de uma pessoa sobre o que é certo e errado.</br>
									</br>II - Segundo Taylor, fundador da administração cientifica, o dinheiro é a única coisa que motiva as pessoas.</br>
                                    </br>III - De acordo com a hierarquia das necessidades de Maslow, os indivíduos tentarão preencher suas necessidades de autorrealização depois das necessidades de estima.</br>
									
									</br>Somente está correto o que se afirma em: </br>

                                    A) I</br>
                                    B) II</br>
                                    C) III</br>
                                    D) I e II</br>
                                    E) II e III</br>
                                    </p>


                                    <p><strong>Questão 7:</strong> Os estudos recentes sobre o poder e a liderança têm demonstrado que ambos estão intimamente ligados. No que tange a estes temas de estudo, identifique a alternativa correta.</br>

                                    A) O poder é definido como a habilidade para conseguir que outra pessoa faça o que se quer, e está relacionado à posição hierárquica do indivíduo.</br>
                                    B) O poder de recompensa e o coercitivo estão relacionados à estrutura organizacional, têm como resposta dos subordinados a internalização de valores. </br>
                                    C) O poder de referência está relacionado à força do carisma, de características pessoais do gestor, que são admiradas e acarretam a identificação com o outro, o desejo de ser semelhante ao outro.</br>
                                    D) O poder legítimo e de especialização não estimulam a internalização da liderança, pois ambos recorrem à credibilidade pessoal do líder.</br>
                                     E) Quanto ao poder de especialização, o fato do indivíduo ter conhecimentos especializados por si só, não é importante para que os demais da equipe tenham a comprovação deste fato</br>
                                    </p>


                                    <p><strong>Questão 8:</strong> Análise transacional se constitui de um conjunto de técnicas que visam à mudança. Chama-se transacional por estudar, analisar as trocas de estímulos e respostas entre os indivíduos, ou transações, entre indivíduos. Na análise transacional comportamento é definido como:</br>

                                    A) Reflexo de processos internos inconscientes.</br> 
									B) Respostas a estímulos externos.</br> 
									C) O que a pessoa faz e diz (comportamento objetivo) o que a pessoa pensa e sente (comportamento subjetivo).</br> 
									D) Sistema que permite ter pensamentos e condutas.</br> 
									E) Sistema de condutas aprendidas que nos levam a agir de determinada forma.</br>
                                    </p>

                                    <p><strong>Questão 9:</strong> Lúcia é uma psicóloga que trabalha em uma Indústria Alimentícia de médio porte. Desde sua graduação, Lúcia sabe que o Absenteísmo (ausência dos funcionários) é uma variável que interfere no planejamento de Recursos Humanos de uma organização. Ao receber a estatística do índice de Absenteísmo dos últimos três meses, a psicóloga foi surpreendida por um crescimento neste índice, em particular do absenteísmo considerado pobre, ou seja, aquele decorrente de motivos particulares e que poderiam ser evitados. Lúcia foi investigar essa questão e encontrou, como motivos para as constantes ausências:</br>

									</br>I - Dificuldade na relação interpessoal com os colegas.</br> 
									II - Baixa remuneração e benefícios escassos.</br> 
									III - Falta de reconhecimento no exercício do cargo.</br> 
									IV - Excesso de calor no ambiente de trabalho.</br> 
									V - Falta de perspectiva de crescimento profissional.</br>

                                    </br> De acordo com a teoria dos 2 fatores de Herzberg (fatores higiênicos e motivacionais), identifique nos itens acima, quais são fatores higiênicos:</br>
									
									A) II, IV e V. </br> 
									B) I, II e IV. </br>
									C) II, III, V. </br>
									D) I, III, V. </br>
									E) I, IV e V. </br>
									
									<p><strong>Questão 10:</strong> Quando solicitado para dar assessoria acerca de estratégias para aumentar a motivação dos trabalhadores, você poderá utilizar-se de alguns indicadores, à exceção de um: </br>
				
									A) Considerar a forma como as metas de trabalho são estabelecidas, pois há evidências de que elas têm significativa influência sobre o desempenho. </br>
									B) Verificar as relações percebidas por esses trabalhadores entre seu esforço e seu desempenho, entre seu desempenho e os resultados obtidos e entre esses resultados e suas metas pessoais.</br>
									C) Realizar um diagnóstico do estágio em que se encontram satisfeitas as necessidades fisiológicas, de segurança, sociais, de estima e de auto-realização dos trabalhadores. </br>
									D) Identificar entre os gerentes desses trabalhadores se predominam a respeito da natureza dos seres humanos, as pressuposições da Teoria X (visão negativa) ou da Teoria Y (visão positiva da organização). </br>
									E) Diagnosticar as percepções de justiça, equidade e injustiça existentes entre os trabalhadores. </br>									
                                    </p>
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