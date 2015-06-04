<?php
if(isset($_GET['word'])){
	$url = "http://dict.cn/".$_GET['word'];
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	
	if($starttypepo=strpos($result,'您要查找的是不是')){
		$searchresult=0;
		$dictresult = array('result' =>$searchresult);
	}
	else{
		$searchresult=1;
		//get american sound url
		$starttypepo=strpos($result,'美');
		$restrim=substr($result,$starttypepo,300);
		$startspo=strpos($restrim,'<i class="sound" naudio="');
		$restrim=substr($restrim,$startspo+25);
		$endspo=strpos($restrim,'" title="男生版发音">');
		$americasound=substr($restrim,0,$endspo);
		if(!$americasound){
			$americasound='no_such_sound';
		}
		//get america rec
		$starttypepo=strpos($result,'美');
		$restrim=substr($result,$starttypepo,300);
		$startspo=strpos($restrim,'<bdo lang="EN-US">');
		$restrim=substr($restrim,$startspo+19);
		$endspo=strpos($restrim,'</bdo>');
		$americarec=substr($restrim,0,$endspo-1);
		$americarec=str_replace("'", "`", $americarec);
		if(!$americarec){
			$americarec='no_such_rec';
		}
		//get chi
		$starttypepo=strpos($result,'basic clearfix');
		$restrim=substr($result,$starttypepo,700);
		$startspo=strpos($restrim,'<li');
		$restrim=substr($restrim,$startspo+4);
		$endspo=strpos($restrim,'<li style="padding-top: 25px;">');
		$chi=substr($restrim,0,$endspo);
		$chi=str_replace('<li>', '', $chi);
		$chi=str_replace('</li>', '', $chi);
		$chi=str_replace('<span>', '', $chi);
		$chi=str_replace('</span>', '', $chi);
		$chi=str_replace('<strong>', '', $chi);
		$chi=str_replace('</strong>', '', $chi);
		$chi=str_replace(' ', '', $chi);
		$chi=str_replace(array("\r\n", "\n", "\r","\t"), '', $chi);
		if(!$chi){
			$chi='no_such_chi';
		}

		//get example
		$starttypepo=strpos($result,'<div class="section sent">');
		$endtypepo=strpos($result,'id="dict-chart-examples"');
		$restrim=substr($result,$starttypepo,$endtypepo-$starttypepo);
		$startspo=strpos($restrim,'<ol');
		$restrim=substr($restrim,$startspo);
		$endspo=strpos($restrim,'</ol');
		$example=substr($restrim,0,$endspo+5);
		$example=str_replace('slider="2"', 'class="curldictexample"', $example);
		//$example=str_replace('<em class=hot>', '', $example);
		//$example=str_replace('</em>', '', $example);
		$example=str_replace('	', '', $example);
		$dictresult = array('result' =>$searchresult, 'americasound' => $americasound,'americarec' => $americarec,'chi' => $chi,'example'=>$example);
	}
	echo json_encode($dictresult);
	curl_close($curl);
}