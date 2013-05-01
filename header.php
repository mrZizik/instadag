

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Insta'Даг - Дагестанская Instagram галерея</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Галерея фотографий связанных с Дагестаном из сервиса Instagram">
    <meta name="author" content="mrAbdulmajidov">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>
    <?php  
  ini_set('display_errors',1);
  error_reporting(E_ALL);

  session_start();
  //include "header.php"; 
  include "gallery.php";
  

  $maxlen = 60;

  ?>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><img src="assets/img/logo_m.png" /></a>
          <div class="nav-collapse collapse">
            <div class="pull-right">
              <div class="control-group" style="margin-bottom: 0px; margin-right: 3px;">
              
                <div class="controls">
                  <div id="tag-search" class="input-prepend">
                    <span class="add-on"><i class="icon-tags"></i></span>
                    <input class="span2" id="inputIcon" type="text">
                  </div>
                </div>
              </div>
              </div>
            <ul class="nav">
              <li><a href="#about">О сайте</a></li>
              <li><a href="#contact">Контакты</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>