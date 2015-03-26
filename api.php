<?php 
include($_SERVER['DOCUMENT_ROOT'].'/H-wordlist/api.class.php');

if(isset($_GET['m'])&&$_GET['m']!=''){
	$mode=$_GET['m'];
	$wordlist=new wordlist;
	if($mode=='i'){		//imp list
		if(isset($_GET['n'])&&$_GET['n']!=''){
			$r=$wordlist->queryimp($_GET['n']);
			if($r['status'])
				echo $r['data'];
		}
		else{
			if(isset($_GET['n'])&&$_GET['n']!=''){
			$r=$wordlist->queryimp(10);
			if($r['status'])
				echo $r['data'];
		}
	}
	elseif($mode=='c'){
		if(isset($_GET['n'])&&$_GET['n']!=''){
			$r=$wordlist->querycurrent($_GET['n']);
			if($r['status'])
				echo $r['data'];
		}
		else{
			if(isset($_GET['n'])&&$_GET['n']!=''){
			$r=$wordlist->querycurrent(10);
			if($r['status'])
				echo $r['data'];
		}
	}
}
else
	echo json_encode(array('status' => 0, 'msg' => 'no param' ));



?>
