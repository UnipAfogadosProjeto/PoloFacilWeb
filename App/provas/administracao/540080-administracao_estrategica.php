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
                                       <strong><span class="font-extra-bold">Código da Prova: </span> 18946528380</strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">Curso: </span> ADMINISTRAÇÃO</strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">Série ou Período: </span> : 2º Bimestre - 7º Semestre</strong>
                                    </div>
                                     <div>
                                        <strong><span class="font-extra-bold">I - Questões objetivas – valendo 5,00 pontos</span></strong>
                                    </div>
                                    <div>
                                        <strong><span class="font-extra-bold">II - Questões discursivas – valendo 5,00 pontos Gerada em: 04/06/2018 20:23:42</span></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body panel-csm">
                                <div>
                                    <h4>Questões de múltipla escolha </h4>

                                    <p>Disciplina: 540080 - Administraçao Estratégica</p>

                                    <p><strong>Questão 1:</strong>As escolas de natureza prescritiva:</br>

                                    </br></br>

                                    A) Estão mais voltadas para como as estratégias devem ser formuladas do que como elas são formuladas.</br>

                                     B) Estão voltadas para a formulação das estratégias, embora orientem como devem ser formuladas. </br>

                                    C) Focalizam os processos de formulação de forma integradora e visionária. </br>

                                    D) Prescrevem o comportamento estratégico ideal, descrevendo os passos de como desenvolver a visão, utilizar o conhecimento adquirido com as experiências anteriores, os métodos de negociação e persuasão, bem como estimulando a formulação da estratégia de forma coletiva.</br>

		E) Preocupam-se me estabelecer métodos integrados de formulação das estratégias.</br>

                                  
                                    </p>

                                    <p><strong>Questão 2:</strong> Qual a principal contribuição da escola do design, bem como da escola do planejamento, respectivamente?</br>

                                    </br></br>

                                    A) Introdução da cadeia de Valor e formulação das estratégias pela coletividade.</br>
		B) Análise SWOT e oportunidade de aprendizado grupal.</br>
		C) Reforço da liderança e utilização de qualquer um com poder.</br>
		D) Ênfase na missão e visão organizacional e Introdução da cadeia de Valor.</br>
		E) Análise SWOT e ênfase na missão e visão organizacional.</br>

                                    </p>

                                    <p><strong>Questão 3:</strong>Esta escola foi responsável por uma visão dominante da formação da estratégia nos anos 80, dando seguimento a trabalhos anteriores sobre estratégia, no meio acadêmico (nomeadamente de Hatten e Schendel) e na consultoria (do Boston Consulting Group e o projeco PIMS), todos precedidos por uma extensa literatura sobre estratégia militar, que remonta a Sun Tzu, em 400 a.C. Nesta perspectiva, a estratégia resume-se a posições genéricas, selecionadas por meio de análises formalizadas de conjunturas setoriais. O planejador torna-se desta forma analista. O que demonstrou ser particularmente lucrativo para ambos, consultores e acadêmicos, que puderam se debruçar em dados sólidos e promover as suas "verdades científicas" em jornais e empresas. Esta literatura cresceu em todas as direções, para incluir grupos estratégicos, cadeias de valor, teorias do jogo e outras idéias - mas sempre de acordo com este pendor analítico. Trata-se da:</br>

                                    A) Escola Cognitiva.</br> 
		B) Escola do Planejamento.</br> 
		C) Escola Descritiva.</br> 
		D) Escola do Posicionamento.</br>
		E) Escola do Design.</br>
                                    </p>


                                    <p><strong>Questão 4:</strong> Em relação às estratégias corporativas de estabilidade e de retração (ou redução), analisar as afirmativas abaixo e em seguida assinalar a alternativa correta: </br>

		I - A estratégia de estabilidade é caracterizada pela redução do nível de operações de uma organização e ocorre quando a empresa passa por um período de dificuldades. Por outro lado, a estratégia de retração é adotada por empresas que buscam manter o mesmo tamanho ou crescer de forma controlada, sendo caracterizada pela ausência de mudanças significativas nas orientações estratégicas da organização.</br>
		II - A estratégia de estabilidade é típica de organizações que apresentam desempenho satisfatório e operam num ambiente estável. </br>
		III - A implementação de estratégias de estabilidade rotineiramente requer o saneamento de unidades de negócio por meio de: reestruturação, reengenharia ou downsizing. </br>
		IV - As estratégias de retração podem envolver a saída de negócios. A reviravolta pode ocorrer quando as estratégias de desinvestimento ou liquidação não funcionaram. </br>

                                    </br>Alternativas de resposta:</br>

		A) Somente as afirmativas I e II são verdadeiras. </br>
		B) Somente as afirmativas II e III são verdadeiras. </br>
		C) Somente as afirmativas III e IV são verdadeiras. </br>
		D) Somente as afirmativas II e IV são verdadeiras. </br>
		E) Todas afirmativas são falsas.</br>

                                    </p>


                                    <p><strong>Questão 5:</strong> Para WRIGHT, KROLL e PARNELL (2000), as estratégias corporativas de estabilidade podem ser de manutenção do conjunto de empresas ou manutenção (concentração) das operações em um setor. Alguns autores denominam o segundo caso como estratégia de concentração, ou seja, ela ocorre quando a empresa seleciona um único segmento como prioritário, como o mais importante, e concentra todos os esforços nele (daí o nome). Isto pode ocorrer por uma série de motivos: proximidade geográfica, potencial de mercado significativo ou potenciais margens de lucro. Um exemplo desse tipo de estratégia: lojas especializadas para atender determinada característica de mercado, como lojas com roupas para pessoas obesas. Ari Barroso, presidente de uma grande rede de supermercados com produtos diversificados para todas as classes sociais optou por uma estratégia empresarial de concentração, com produtos direcionados para a baixa renda (classes sociais C e D), mas foi duramente criticado. Justificou a escolha alegando que, desta forma, ele focalizaria:</br>

                                    </br></br>

		A) O fato de a empresa ser única em seu setor em dimensões que os consumidores valorizam, buscando a alta qualidade dos produtos e sua distribuição diferenciada.</br> 
		B) Um único negócio, podendo penetrar melhor em um mercado de alto crescimento. </br>
		C) a entrada em novos negócios relacionados ao negócio central original, visando à transferência de tecnologias. </br>
		D) A expansão do domínio da organização na cadeia de fornecimento ou de distribuidores, reduzindo custos. </br>
		E) A expansão para negócios não relacionados entre si, minimizando os riscos devidos a flutuações de mercado em um único setor. </br>
</br>
                                    </p>


                                    <p><strong>Questão 6:</strong> A respeito do crescimento por meio de fusões e aquisições, analisar as afirmativas abaixo e em seguida assinalar a alternativa correta: </br>

                                    </br></br>

		I - Sabe-se que o crescimento externo das organizações pode se dar por meio de fusões e aquisições. A fusão ocorre quando duas empresas, geralmente de tamanhos idênticos (ou similares) juntam suas operações e passam a operar como uma só. A aquisição, por sua vez, consiste na compra de uma empresa que passa a atuar como parte de uma organização maior. </br>
		II - Um exemplo de aquisição é o da BSH (unidade de eletrodomésticos das multinacionais alemãs Bosch e Siemens) que entrou no Brasil há quase 15 anos, com a compra da brasileira Continental, então líder no mercado de fogões. </br>
		III - Exemplos de fusões são: a formação da Brasil Foods, resultado da união entre a Sadia e a Perdigão; a união entre a VCP e a Aracruz, no mercado de celulose, e os caminhos de crescimento do grupo siderúrgico Gerdau pelas Américas. </br>
		IV - Para a Sadia, a fusão com a Perdigão, ao invés de ser prioritariamente uma alternativa de crescimento, na verdade se apresentou como uma tábua de salvação, devido aos deslizes financeiros praticados que quase a levaram à falência. </br>


                                    </br>Alternativas de resposta: </br>

		A) Somente as afirmativas I, II e III são verdadeiras. </br>
		B) Somente as afirmativas I, III e IV são verdadeiras. </br>
		C) Somente as afirmativas I, II e IV são verdadeiras. </br>
		D) Somente as afirmativas II, III e IV são verdadeiras. </br>
		E) Todas afirmativas são verdadeiras.</br>

                                    </p>


                                    <p><strong>Questão 7:</strong> Entre as premissas básicas que sustentam a escola do design, podemos citar: </br>

                                    </br>
		A) A produção da estratégia deve ser um processo deliberado de pensamento consciente. </br>
		B) A estratégia existe na mente do líder como perspectiva, especificamente um senso de direção a longo prazo, uma visão do futuro da organização. </br>
		C) As estratégias devem resultar de um processo controlado e consciente de planejamento formal. </br>
		D) A responsabilidade pelo controle e percepção é do executivo principal. </br>
		E) Estratégias são posições genéricas, especificamente comuns e identificáveis no mercado. </br>

                                    </p>


                                    <p><strong>Questão 8:</strong> Recorde as seguintes definições:</br>

                                    </br>
		I - As estratégias podem ser, na visão de Mintzberg e Quinn (1991), corporativas, unidade de negócio e funcional. Segundo Wright, Kroll e PArnell, as estratégias corporativas podem ser de crescimento, estabilidade e redução (ou retração). Segundo Porter, há as estratégias corporativas e as genéricas. </br>
		II - O desempenho global da organização é a síntese dos resultados relevantes para a organização como um todo, levando-se em conta todas as partes interessadas e possibilita a avaliação do alcance dos objetivos estabelecidos.</br>
		III - A estrutura organizacional projeta e organiza os relacionamentos dos níveis hierárquicos e o fluxo das informações essenciais de uma organização.</br>
		</br>

                                    </br>As opções a seguir apresentam afirmações a respeito de aspectos gerais desses conceitos (estratégia, estrutura e desempenho). Assinale a única verdadeira. </br>

		A) O ambiente de uma empresa é tudo aquilo que pode ser controlado.</br> 
		B) O desempenho de uma empresa independe de sua estratégia. </br>
		C) A estratégia de uma empresa depende principalmente da sua estrutura.</br> 
		D) A integração empresarial depende apenas da estrutura organizacional. </br>
		E) Na integração horizontal, procuram-se produtos (bens e serviços) complementares.</br> 

                                    </p>

                                    <h4>Questões discursivas</h4>

                                    <p><strong>Questão 1:</strong> Leia atentamente o texto a seguir: Segundo o presidente da Associação Brasileira de Supermercados (Abras), “uma concentração, em termos de mercado, de cerca de 30% não é nenhum ‘bicho de sete cabeças’. Há uma concentração em São Paulo, mas no restante do país a situação é diferente”. Segundo a Abras, a participação das vendas das maiores empresas do setor de supermercados no Brasil passou de 40%, em 2009, para 43% em 2010. Embora a concentração avance, ainda está longe da realidade na Europa, onde as cinco maiores redes respondem por 70% a 80% das vendas, destacou a Abras. PETRY, R. Competição continua mesmo com fusão entre Carrefour e Pão de Açúcar. São Paulo: Agência Estado, 2011 (adaptado). 
Com base na abordagem das forças competitivas de Michael Porter, aponte qual(is) força(s) serão “fortalecidas” com essa estratégia. 
</br>

                                    </p>

                                    <p><strong>Questão 2:</strong> As Escolas do Pensamento Estratégico estão divididas em três grupos, de acordo com os estudos realizados por Mintzberg, Ahlstrand e Lampel, no livro Safári de Estratégia. Quais são esses grupos, quais são suas características e quais escolas os compõem! </br>

                                    </br>
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