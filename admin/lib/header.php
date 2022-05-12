<?php

include_once('database.php');
if(!isset($_SESSION['name']) or !isset($_SESSION['email']) or !isset($_SESSION['password']) ){
    header("location:index.php");
}
?>



<!DOCTYPE html>
<html lang="en" class="app">

<head>
    <meta charset="utf-8" />
    <title><?php echo $_SESSION['name']?></title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
    <!-- MDBootstrap Datatables  -->

  



<style>
.a{
 margin-top:30px;
}









</style>




   
</head>


<body class="">
    <section class="vbox">
        <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
            <div class="navbar-header aside-md dk">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
                <a href="deshboard.php" class="navbar-brand"> <img src="images/logo.png" class="m-r-sm" alt="scale"> <span class="hidden-nav-xs">ICST</span> </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a>
            </div>
            <ul class="nav navbar-nav ">
               
                    <div class="row">
                            <div class="col-12 md-12 sm-10 text-center ">
                                
                                  <h4  class="text-center" style="margin-top:16px;
   ">Institute of Computer Scince & Technology</h4>
                               
                            </div>
                            </div>
            </ul>
           
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
<li class="hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="i i-chat3"></i> <span class="badge badge-sm up bg-danger count">2</span> </a>
       <section class="dropdown-menu aside-xl animated flipInY">
           <section class="panel bg-white">
               <div class="panel-heading b-light bg-light"> <strong>You have <span class="count">2</span> notifications</strong> </div>
               <div class="list-group list-group-alt">
                   <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <img src="images/a0.png" alt="..." class="img-circle"> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br> <small class="text-muted">10 minutes ago</small> </span> </a>
                   <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">1 hour ago</small> </span> </a>
               </div>
               <div class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="fa fa-cog"></i></a> <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a> </div>
           </section>
       </section>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/a0.png" alt="..."> </span> <?php echo $_SESSION['name']?> <b class="caret"></b> </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li> <span class="arrow top"></span> <a href="#">Settings</a> </li>
                        <li> <a href="profile.html">Profile</a> </li>
                        <li>
                            <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a>
                        </li>
                        <li> <a href="docs.html">Help</a> </li>
                        <li class="divider"></li>
                        <li> <a href="logout.php" data-toggle="ajaxModal">Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </header>
        <section>
            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                    <section class="vbox">
                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                <div class="clearfix wrapper dk nav-user hidden-xs">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="images/a0.png" class="dker" alt="..."> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt"><?php echo $_SESSION['name']?></strong> <b class="caret"></b> </span> <span class="text-muted text-xs block">Art Director</span> </span>
                                        </a>
                                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                            <li> <span class="arrow top hidden-nav-xs"></span> <a href="#">Settings</a> </li>
                                            <li> <a href="profile.html">Profile</a> </li>
                                            <li>
                                                <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a>
                                            </li>
                                            <li> <a href="docs.html">Help</a> </li>
                                            <li class="divider"></li>
                                            <li> <a href="logout.php" data-toggle="ajaxModal">Logout</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                                    <ul class="nav nav-main" data-ride="collapse">
                                        <li class="active">
                                            <a href="deshboard.php" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Collage info</span> </a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <b class="badge bg-danger pull-right">4</b> <i class="i i-stack icon"> </i> <span class="font-bold"> add More</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="Addstudent.php" class="auto"> <i class="i i-dot"></i> <span>Add 
                                                    Student</span> </a>
                                                </li>
                                                <li>
                                                    <a href="subjectall.php" class="auto"> <i class="i i-dot"></i> <span>Add Depatrment Book</span> </a>
                                                </li>
                                                <li>
                                                    <a href="addboardresult.php" class="auto"> <i class="i i-dot"></i> <span>Add Board result </span> </a>
                                                </li>
                                                
                                                </ul>
                                        </li>
                                        <li>
                                             <a href="computer.php" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-lab icon"> </i> <span class="font-bold">Computer Depatrment </span> </a>
                                            <ul class="nav dk">
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="civil.php" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-docs icon"> </i> <span class="font-bold">Civil Depatrment</span> </a>
                                            <ul class="nav dk">
                                             
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="Electronics.php" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-grid2 icon"> </i> <span class="font-bold">Electronic Depatrment</span> </a>
                                            <ul class="nav dk">
                                              
                                    </ul>
                                    <li>
                                            <a href="garmants.php" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-grid3 icon"> </i> <span class="font-bold">Garments Depatrment</span> </a>
                                            <ul class="nav dk">
                                              
                                    </ul>
                                    <li>
                                             <a href="tixtile.php" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-circle-sm text-danger-dk"> </i> <span class="font-bold">Textile Depatrment </span> </a>
                                            <ul class="nav dk">
                                            </ul>
                                        </li>
                                        <li>
                                             <a href="Mechanical.php" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-circle-sm text-info-dk"> </i> <span class="font-bold">Mechanical Depatrment </span> </a>
                                            <ul class="nav dk">
                                            </ul>
                                            <li>
                                             <a href="Tele_communication.php" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-circle-sm text-success-dk"> </i> <span class="font-bold">Tele-commonication  </span> </a>
                                            <ul class="nav dk">
                                            </ul>
                                        </li>
                                        <li>
                                             <a href="arctechar.php" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-circle-sm-o text-warning"> </i> <span class="font-bold" style="font-size:12px;">Archtecture Department</span> </a>
                                            <ul class="nav dk">
                                            </ul>
                                        </li>
                                    
                                    
                                </nav>
                                <!-- / nav -->
                            </div>
                        </section>
                        <footer class="footer hidden-xs no-padder text-center-nav-xs">
                            <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a>
                            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a>
                        </footer>
                    </section>
                </aside>
                   
<section id="content">
                    <section class="hbox stretch">
                        <section>
                            <section class="vbox">
                                <section class="scrollable padder">
                                  
                                    <div class="row">
                                       
                                                    
                                      
                <!-- /.aside -->