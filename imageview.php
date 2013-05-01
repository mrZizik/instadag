<?php

	
    include "header.php"; 
	
    $row=$_GET['row'];
    $i=$_GET['id'];
	$maxlen = 60;
	$response=$_SESSION['response'.$row];
    $thumbnail=$response->data[$i]->images->low_resolution->url;
    $link=$response->data[$i]->images->standard_resolution->url;
    $author=$response->data[$i]->user->username;
    $likes=$response->data[$i]->likes->count;
    $comments=$response->data[$i]->comments->count;
    $text=$response->data[$i]->caption->text;
    $shorttext=cutString($text,$maxlen);
 	  	
    	?>
        <div class="row-fluid">
            <div class="center span12 well">
                <div class="imagediv">
                    <div class="well image">
                        <p>by: @<?=$author ?></p>
                        <img src=<?=$link ?>>
                        <div class="info">
                            <p><i class="icon-heart"></i>: <?=$likes?>. <i class="icon-comment"></i>: <?=$comments?> </p>
                            <p><?=$shorttext ?></p>
                        </div>
                    </div>
      
                </div>
            </div>
</body>
</html>