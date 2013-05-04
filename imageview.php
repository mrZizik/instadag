<?php

	
    include "header.php"; 
	
    $row=$_GET['row'];
    $i=$_GET['id'];
    $state=1;
    if(isset($_GET['state'])) {

    $state=$_GET['state'];
    }
	$maxlen = 60;
	$response=$_SESSION['response'.$row];
    $thumbnail=$response->data[$i]->images->low_resolution->url;
    $link=$response->data[$i]->images->standard_resolution->url;
    $author=$response->data[$i]->user->username;
    $avatar=$response->data[$i]->user->profile_picture;
    $likes=$response->data[$i]->likes->count;
    $comments=$response->data[$i]->comments->count;
    if (isset($response->data[$i]->caption->text)) {
    $text=$response->data[$i]->caption->text;
    $shorttext=cutString($text,$maxlen);}
    else {
        $shorttext="Нет описания";
        $text="Нет описания";
    }

    
    $filter=$response->data[$i]->filter;
    if (isset($response->data[$i]->location)) {
     $loclat=$response->data[$i]->location->latitude;
     $loclon=$response->data[$i]->location->longitude;
    }
    else {
     $loclat="Нет";
     $loclon="информации.";
    }
 	  	
    	?>
        <div class="row-fluid">
            <div class="center well span12"style="margin: 0 auto; background: rgba(16, 162, 231, 0.66); width: 80%; float: none; min-height: 0px; height: 700px;">
                <div class="imagediv">
                    <div class="well image" style=" margin-top: px; width: 80%; min-height: 604px;" >
                        <img src=<?=$link ?>>
                        
                    </div>
                    <div class="info well" style="min-height: 400px; margin-top: 30px; width: 100%; margin-left: -19px;">
                            <div id="author" style="background: rgba(16, 162, 231, 0.66); padding: 20px; padding-bottom: 5px;"class="pull-left hero-unit">
                                <a href="http://instagram.com/<?=$author ?>"><img style="display: block; border: 2px inset black;" src="<?=$avatar ?>" width="200px" />
                                <small style="text-align: center; display: block; margin: 0 auto;"><?=$author ?></small></a>
                            </div>
                            <div id="info" class="pull-right" style="width: 80%; height: 300px;">
                                <div class="btn-group">
                                    <a href="/imageview.php?id=<?=$i ?>&row=<?=$row ?>&state=1" class="btn"><i class="icon-picture"></i> Информация </a>
                                    <a href="/imageview.php?id=<?=$i ?>&row=<?=$row ?>&state=2" class="btn"><i class="icon-heart"></i> <?=$likes ?></a>
                                    <a href="/imageview.php?id=<?=$i ?>&row=<?=$row ?>&state=3" class="btn"><i class="icon-comment"></i> <?=$comments ?></a>
                                </div>
                                <?php if ($state==1) { ?>

                                <div id="imageinfo">
                                    <ul style="margin: 0; list-style: none;"> 
                                        <li class="well well-small infolist"><i class="icon-camera"></i> Фильтр: <?=$filter ?></li>
                                        <li class="well well-small infolist"><i class="icon-map-marker"></i> Координаты: <?=$loclat ?> <?=$loclon ?></li>
                                        <li class="well well-small infolist"><i class="icon-tags"></i> Теги: <?php for ($t=0;$t<count($response->data[$i]->tags);$t++) { echo "#".$response->data[$i]->tags[$t]." "; }  ?></li>
                                        <li class="well well-small infolist"><i class="icon-list"></i> Описание: <?=$text ?></li>
                                    </ul>
                                    </div>
                                    <? } ?>
                                <?php if ($state==2) { ?>

                                <div id="imageinfo">
                                    <?php if ($likes>1) { echo "<h5>Понравилось $likes людям!</h5>"; }
                                    if ($likes==0) { echo "<h5>Пока никому не понравилось!</h5>"; }
                                    if ($likes==1) { echo "<h5>Понравилось однму человеку!</h5>"; }?>
                                    <ul style="margin: -20px 0 0 -25px; list-style: none;"> 
                                    <?php if ($likes>20) {
                                        $likes=20;
                                    }
                                        for ($l=0;$l<$likes;$l++) { 
                                        if (isset($response->data[$i]->likes->data[$l]->username)) { $authorl=$response->data[$i]->likes->data[$l]->username;
                                        $avatarl=$response->data[$i]->likes->data[$l]->profile_picture;?>
                                        <li style="display: inline-block; padding: 25px"><a href="http://instagram.com/<?=$authorl ?>"><img src="<?=$avatarl ?>" width="100px"?><br><p style="text-align: center;"><?=$authorl ?></p></a></li>
                                    
                                    <? } }?>
                                    </ul>
                                </div>

                              <?php  } ?>
                               <?php if ($state==3) { ?>

                                <div id="imageinfo" style="margin-top: 30px;">
                                    <ul style="margin: -20px 0 0 -25px; list-style: none;"> 
                                    <?php if ($comments>10) {
                                        $comments=10;
                                    }
                                        for ($c=0;$c<$likes;$c++) { 
                                        if (isset($response->data[$i]->comments->data[$c]->from->username)) { $authorc=$response->data[$i]->comments->data[$c]->from->username;
                                        $avatarc=$response->data[$i]->comments->data[$c]->from->profile_picture; $text=$response->data[$i]->comments->data[$c]->text;?>
                                        <li><div class="well"><div class="pull-left hero-unit" style="padding: 2px;"><a href="http://instagram.com/<?=$authorc ?>"><img src="<?=$avatarc ?>" width="80px"?><br><small style="text-align: center;"><?=$authorc ?></small></a></div> <div id="commment" style="height: 100px;"> <?=$text ?> </div></div></li>
                                    
                                    <? } }?>
                                    </ul>
                                </div>

                              <?php  } ?>
                            </div> 
                        </div>
                        </div>
      
                </div>
            </div>
</body>
</html>