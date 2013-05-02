<?php  include "header.php"; ?>

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
      else {
        $shorttext="Нет описания";
      }
      $id=$response->data[$i]->id;
      
      ?>

      <div class="imagediv">
    
      <div class="well image">
        <p>by: @<?=$author ?></p>
        <a href=imageview.php?id=<?=$i ?>&row=<?=$row ?>><img src=<?=$thumbnail ?>></a>
      <div class="info">
        <div class="btn-group" style="margin-left: 10px; margin-top: 5px;">
        <a href="/imageview.php?id=<?=$i ?>&row=<?=$row ?>&state=2" class="btn"><i class="icon-heart"></i> <?=$likes ?></a>
                                <a href="/imageview.php?id=<?=$i ?>&row=<?=$row ?>&state=3" class="btn"><i class="icon-comment"></i> <?=$comments ?></a></div>
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
        <div class="btn-group" style="margin-left: 10px; margin-top: 5px;">
        <a href="/imageview.php?id=<?=$i ?>&row=<?=$row ?>&state=2" class="btn"><i class="icon-heart"></i> <?=$likes ?></a>
                                <a href="/imageview.php?id=<?=$i ?>&row=<?=$row ?>&state=3" class="btn"><i class="icon-comment"></i> <?=$comments ?></a></div>
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
        <div class="btn-group" style="margin-left: 10px; margin-top: 5px;">
        <a href="/imageview.php?id=<?=$i ?>&row=<?=$row ?>&state=2" class="btn"><i class="icon-heart"></i> <?=$likes ?></a>
                                <a href="/imageview.php?id=<?=$i ?>&row=<?=$row ?>&state=3" class="btn"><i class="icon-comment"></i> <?=$comments ?></a></div>
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
