<?php
$getlist=isset($_GET['list'])?$_GET['list']:'test';
$getgro=isset($_GET['gro'])?$_GET['gro']:'2';
$getidlo=isset($_GET['idlo'])?$_GET['idlo']:'1';
$getidup=isset($_GET['idup'])?$_GET['idup']:'100';
require_once 'vendor/autoload.php';
require_once("sys_conf.inc");
//$loader = new Twig_Loader_Filesystem('template');
$loader = new Twig_Loader_Filesystem('.');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
));

$twig->addExtension(new Twig_Extension_Debug());  
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
	mysql_select_db($DBNAME);
	mysql_query("SET NAMES 'utf8'");
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

	$sql="Select * from ".$getlist."  where gro=".$getgro." and id>".($getidlo-1)." and id<".($getidup+1);	
	$result=mysql_query($sql);
	$wdlistarr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
		array_push($wdlistarr, $rowt);
	}
	shuffle($wdlistarr);
	for($i=0;$i<count($wdlistarr);$i++){
		$wdlistarr[$i]['curnum']=$i;
	}
	//print_r($wdlistarr);
include('getip.php');

echo $twig->render('twigframe.html', array(
	'sentence' => 'I seem OK.',
	'list' => $getlist,
	'idlo' => $getidlo,
	'idup' => $getidup,
	'gro' => $getgro,
	'wdlistarr' =>  $wdlistarr,
	'totalnum' => $i,
	'Remote_address' => $_SERVER["REMOTE_ADDR"],
	'ipaddress' => $ipaddress,
	'implist' => $implist,
	'mfllist' => $mfllist,
	'ivtlist' => $ivtlist,
	'impalllist' => $impalllist
));
?>