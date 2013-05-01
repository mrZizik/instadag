
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
    <? php include "gallery.php"; ?>

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

    <div class="container-fluid">
     <div class="row-fluid">
            <div id="left" class="span4 well">
                <?

  $tag="dagestan"; 
  $response=getByTag($tag);
   $row=1;
              unset($_SESSION['response'.$row]);
              $_SESSION['response'.$row]=$response;
  
  $len=count($response->data);
    for ($i=0; $i < $len  ; $i++) { 
      $thumbnail=$response->data[$i]->images->low_resolution->url;
      $link=$response->data[$i]->images->standard_resolution->url;
      $author=$response->data[$i]->user->username;
      $likes=$response->data[$i]->likes->count;
      $comments=$response->data[$i]->comments->count;
      if (isset($response->data[$i]->caption->text)) {
        $text=$response->data[$i]->caption->text;
        $shorttext=cutString($text,$maxlen);
      if (strlen($shorttext)<=3) {
        $shorttext=substr($text, 0, 54);
      }}
      $id=$response->data[$i]->id;
      
      ?>

      <div class="imagediv">
    
      <div class="well image">
        <p>by: @<?=$author ?></p>
        <a href=imageview.php?id=<?=$i ?>&row=<?=$row ?>><img src=<?=$thumbnail ?>></a>
      <div class="info">
        <p><i class="icon-heart"></i>: <?=$likes?>. <i class="icon-comment"></i>: <?=$comments?> </p>
        <p><?=$shorttext ?></p>
      </div>
      </div>
      
      </div>
    <?}?>
    

            </div><!--/span-->
            <div id="center" class="span4 well">
              <? $response=getByTag("кавказ");
                   $row=2;
              unset($_SESSION['response'.$row]);
              $_SESSION['response'.$row]=$response;
  $len=count($response->data);
    for ($i=0; $i < $len  ; $i++) { 
      $thumbnail=$response->data[$i]->images->low_resolution->url;
      $link=$response->data[$i]->images->standard_resolution->url;
      $author=$response->data[$i]->user->username;
      $likes=$response->data[$i]->likes->count;
      $comments=$response->data[$i]->comments->count;
      if (isset($response->data[$i]->caption->text)) {
        $text=$response->data[$i]->caption->text;
        $shorttext=cutString($text,$maxlen);
      if (strlen($shorttext)<=3) {
        $shorttext=substr($text, 0, 54);
      }}
      ?>
      <div class="imagediv">
      
      <div class="well image">
        <p>by: @<?=$author ?></p>
        <a href=imageview.php?id=<?=$i ?>&row=<?=$row ?> ><img src=<?=$thumbnail ?> /></a>
        
            
      <div class="info">
        <p><i class="icon-heart"></i>: <?=$likes?>. <i class="icon-comment"></i>: <?=$comments?> </p>
        <p><?=$shorttext ?></p>
      </div>  
      </div>
      
      </div>
    <?}?>
    
    </div>
            <!--/span-->
            <div id="right" class="span4 well">
              <? $response=getByTag("анжи");
              $row=3;
              unset($_SESSION['response'.$row]);
              $_SESSION['response'.$row]=$response;

  $len=count($response->data);
    for ($i=0; $i < $len  ; $i++) { 
      $thumbnail=$response->data[$i]->images->low_resolution->url;
      $link=$response->data[$i]->images->standard_resolution->url;
      $author=$response->data[$i]->user->username;
      $likes=$response->data[$i]->likes->count;
      $comments=$response->data[$i]->comments->count;
      if (isset($response->data[$i]->caption->text)) {
        $text=$response->data[$i]->caption->text;
        $shorttext=cutString($text,$maxlen);
      if (strlen($shorttext)<=3) {
        $shorttext=substr($text, 0, 54);
      }}
      ?>
      <div class="imagediv">
      
      <div class="well image">
        <p>by: @<?=$author ?></p>
        <a href=imageview.php?id=<?=$i ?>&row=<?=$row ?> ><img src=<?=$thumbnail ?>></a>
        <div class="info">
        <p>Нравится: <?=$likes?>. Комментариев: <?=$comments?> </p>
        <p><?=$shorttext ?></p>
      </div>
      </div>
      
      </div>
    <?}?>
            </div><!--/span-->
          </div><!--/row-->
      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/instadag/assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
