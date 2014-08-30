<?php
if(isset($_GET['word'])){
	$url = "http://dict.cn/".$_GET['word'];
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	
	if($starttypepo=strpos($result,'您要查找的是不是'))
		$americasound='no_such_word';
	else{
		$starttypepo=strpos($result,'美');
		$restrim=substr($result,$starttypepo,300);
		$startspo=strpos($restrim,'<i class="sound" naudio="');
		$restrim=substr($restrim,$startspo+25);
		$endspo=strpos($restrim,'" title="男生版发音">');
		$americasound=substr($restrim,0,$endspo);
		if(!$americasound){
			$americasound='no_such_word';
		}
	}
	$dictresult = array('americasound' => $americasound);
	echo json_encode($dictresult);
	curl_close($curl);
}