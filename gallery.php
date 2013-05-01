<?php 
	function cutString($string, $maxlen) {
    	$len = (mb_strlen($string) > $maxlen)
        ? mb_strripos(mb_substr($string, 0, $maxlen), ' ')
        : $maxlen
    	;
    	$cutStr = mb_substr($string, 0, $len);
    	return (mb_strlen($string) > $maxlen)
        	? '' . $cutStr . '...'
        	: '' . $cutStr . '' ;
	} 
	
	function getByTag($tag) {
		switch($tag) {
			case 'dagestan': $ci=1; break;
			case 'кавказ': $ci=2; break;
			case 'анжи': $ci=3; break;
}
		
		if (isset($_GET['pageno'.$ci])) {
			$_SESSION['pageno'.$ci]=$_GET['pageno'.$ci];
		}
		else  {
			$_SESSION['pageno'.$ci]=0;
		}
		
		if (isset($_SESSION['pageno'.$ci]) && isset($_SESSION['page'.$ci.'_'. $_SESSION['pageno'.$ci]])) 
        	$jsonurl = $_SESSION['page'.$ci.'_' .$_SESSION['pageno'.$ci]];  
		else 
        	$jsonurl = "https://api.instagram.com/v1/tags/$tag/media/recent?client_id=eb62fbc918db4bd4949a46e17d1135d5"; 
    	$json = file_get_contents($jsonurl);
		$response = json_decode($json);
		echo "<h3 style=\"margin: 0 10px;\"><i style=\"margin: 10px 0;\" class=\"icon-tag\"></i> #$tag</h3> <div class=\"nav\">";
		 echo "<div class=\"btn-group\">";
		 if (($_SESSION['pageno'.$ci] > 0)&&(isset($response->pagination->next_url))) 
		{ 
        	
        	echo "<a class=\"btn\" href=\"?pageno$ci=" . ($_SESSION['pageno'.$ci] - 1) . "\"><i class=\"icon-chevron-left\"></i>Сюда</a>"; 
        	echo "<a class=\"btn\" href=\"?pageno$ci=0\">В начало</a>";
        	echo "<a class=\"btn\" href=\"?pageno$ci=" . ($_SESSION['pageno'.$ci] + 1) . "\">Туда<i class=\"icon-chevron-right\"></i></a>"; 

		} 
		
		if (($_SESSION['pageno'.$ci] > 0)&&(!isset($response->pagination->next_url)))  {
        	echo "<a class=\"btn\" href=\"?pageno$ci=" . ($_SESSION['pageno'.$ci] - 1) . "\"><i class=\"icon-chevron-left\"></i>Сюда</a>"; 
        	echo "<a class=\"btn\" href=\"?pageno$ci=0\">В начало</a>";
        	echo "<a class=\"btn disabled\" href=\"?pageno$ci=" . ($_SESSION['pageno'.$ci] + 1) . "\">Туда<i class=\"icon-chevron-right\"></i></a>"; 
        	}
        if (($_SESSION['pageno'.$ci] <= 0)&&isset($response->pagination->next_url)) {
        	echo "<a class=\"btn disabled\" href=\"?pageno$ci=" . ($_SESSION['pageno'.$ci] - 1) . "\"><i class=\"icon-chevron-left\"></i>Сюда</a>"; 
        	echo "<a class=\"btn disabled\" href=\"?pageno$ci=0\">В начало</a>";
        	echo "<a class=\"btn\" href=\"?pageno$ci=" . ($_SESSION['pageno'.$ci] + 1) . "\">Туда<i class=\"icon-chevron-right\"></i></a>"; 
        }
        
    	echo "</div>";

		if (isset($response->pagination->next_url)) 
        	$_SESSION['page'.$ci.'_' . ($_SESSION['pageno'.$ci] + 1)] = $response->pagination->next_url; 
		else 
        	unset($_SESSION['page'.$ci.'_' . ($_SESSION['pageno'.$ci] + 1)]); 
        
        echo "</div>";
		return $response;


}
	function getMore($tag,$max_id) {
		$url="https://api.instagram.com/v1/tags/$tag/media/recent?client_id=eb62fbc918db4bd4949a46e17d1135d5&max_tag_id=$max_id";
		$out = file_get_contents($url);
		$obj=json_decode($out);
		return $obj;
	}


?>