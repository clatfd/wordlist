<?php
	$getlist=isset($_GET['list'])&&$_GET['list']?$_GET['list']:'gre3000';
	$getgro=isset($_GET['gro'])&&$_GET['gro']?$_GET['gro']:'1';
	$getidlo=isset($_GET['idlo'])&&$_GET['idlo']?$_GET['idlo']:'1';
	$getidup=isset($_GET['idup'])&&$_GET['idup']?$_GET['idup']:'1000';
	$getrd=isset($_GET['rd'])&&$_GET['rd']?$_GET['rd']:'0';
	setcookie("list", $getlist,time()+3600*24*365);
	setcookie("gro", $getgro,time()+3600*24*365);
	setcookie("idlo", $getidlo,time()+3600*24*365);
	setcookie("idup", $getidup,time()+3600*24*365);
	setcookie("rd", $getrd,time()+3600*24*365);
require_once 'vendor/autoload.php';
require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
include('getip.php');

//$loader = new Twig_Loader_Filesystem('template');
$loader = new Twig_Loader_Filesystem('.');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
));

$twig->addExtension(new Twig_Extension_Debug());  
$link_id=mysql_connect($DB_HOST,$DB_USER,$DB_PWD);
	mysql_select_db("word");
	mysql_query("SET NAMES 'utf8'");

	//record query
	$iipp=$_SERVER["REMOTE_ADDR"];
	$timstp=time();
	//$dat=date("Y/m/d")." ".($tim[2]).":".$tim[1].":".$tim[0]; 
	$date = new DateTime();
	$date=$date->format('Y-m-d H:i:s');
	$sql="Insert * from ".$getlist."  where id>".($getidlo-1)." and id<".($getidup+1);
	$sql="INSERT INTO queryrecord (list, gro, idlo, idup, querytime, unixstamp, ip)VALUES ('$getlist','$getgro','$getidlo','$getidup','$date','$timstp','$ipaddress')";
	$result=mysql_query($sql);

	$implist = array(); 
	$mfllist = array(); 
	$ivtlist = array(); 
	$impalllist = array(); 
	
	$sql="Select * from imp ";	
	$implisttemp=mysql_query($sql);
	while ($rowi=mysql_fetch_array($implisttemp))
	{	
		array_push($implist, $rowi[3]);
	}
	$sql="Select * from i_mfl ";	
	$implisttemp=mysql_query($sql);
	while ($rowii=mysql_fetch_array($implisttemp))
	{	
		array_push($mfllist, $rowii[3]);
	}
	$sql="Select * from i_ivt ";	
	$implisttemp=mysql_query($sql);
	while ($rowiii=mysql_fetch_array($implisttemp))
	{	
		array_push($ivtlist, $rowiii[3]);
	}	
	$impalllist=array_merge($implist,$mfllist,$ivtlist);

	$sql="Select * from ".$getlist."  where id>".($getidlo-1)." and id<".($getidup+1);
	if(isset($getgro)&&$getgro!=''){
		if(strpos($getgro,","))
			$sql.=" and ( gro=".str_replace(',', ' or gro= ', $getgro).") ";
		else
			$sql.=" and gro=".$getgro;
	}
	if(isset($_GET['rd'])&&$_GET['rd']>0){
		$randnum=$_GET['rd'];
		$sql.=" order by rand() limit ".$randnum;
	}
	//echo $sql;

	$result=mysql_query($sql);
	$wdlistarr = array(); 
	while ($rowt=mysql_fetch_array($result,MYSQL_ASSOC))
	{
		array_push($wdlistarr, $rowt);
	}

	shuffle($wdlistarr);
	for($i=0;$i<count($wdlistarr);$i++){
		$wdlistarr[$i]['curnum']=$i;
		$wdlistarr[$i]['list']=$getlist;
		//$wdlistarr[$i]['jsondata']=json_encode($wdlistarr[$i]);
	}
	if($i>300&&(!isset($_GET['fc'])||$_GET['fc']!=1)){
		echo $i." words exceed 300, <a href=\"".$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']."&fc=1\">continue</a>?";
		return;
	}
	//print_r($wdlistarr);

echo $twig->render('twigframe.html', array(
	'sentence' => 'I seem OK.',
	'list' => $getlist,
	'idlo' => $getidlo,
	'idup' => $getidup,
	'gro' => $getgro,
	'rd' => $getrd,
	'wdlistarr' =>  $wdlistarr,
	'totalnum' => $i,
	'Remote_address' => $_SERVER["REMOTE_ADDR"],
	'ipaddress' => $ipaddress,
	'implist' => $implist,
	'mfllist' => $mfllist,
	'ivtlist' => $ivtlist,
	'impalllist' => $impalllist,
));
?>