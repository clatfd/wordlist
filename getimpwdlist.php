<?php
require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
$link_id=mysql_connect($DB_HOST,$DB_USER,$DB_PWD);
mysql_select_db("word");
mysql_query("SET NAMES 'utf8'");
//$list=$_GET['list'];
//$eng=$_GET['eng'];
$sql="Select * from imp";	
$result=mysql_query($sql);
$arr = array(); 
$arrtotal=array();

$arrimp = array(); 
while ($rowt=mysql_fetch_array($result))
{
	$eng= $rowt['eng'];
	array_push($arrimp,$eng);
	array_push($arrtotal,$eng);
	//print_r($arr);
}

$sql="Select * from i_mfl";	
$result=mysql_query($sql);
$arrmfl = array(); 
while ($rowt=mysql_fetch_array($result))
{
	$eng= $rowt['eng'];
	array_push($arrmfl,$eng);
	array_push($arrtotal,$eng);
	//print_r($arr);
}

$sql="Select * from i_ivt";	
$result=mysql_query($sql);
$arrivt = array();
 while ($rowt=mysql_fetch_array($result))
{
	$eng= $rowt['eng'];
	array_push($arrivt,$eng);
	array_push($arrtotal,$eng);
	//print_r($arr);
}

array_push($arr,$arrtotal);
array_push($arr,$arrimp);
array_push($arr,$arrmfl);
array_push($arr,$arrivt);

echo json_encode($arr);

mysql_close($link_id);
?>