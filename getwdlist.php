<?php require_once("sys_conf.inc");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'utf8'");
//$list=$_GET['list'];
//$eng=$_GET['eng'];
$sql="Select * from ".$_GET['list']."  where gro=".$_GET['gro']." and id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);	
$result=mysql_query($sql);
$arr = array(); 
while ($rowt=mysql_fetch_array($result))
{
	$arrt = array(); 
	$id=$rowt['id'];
	$eng= $rowt['eng'];
	$rec=$rowt['rec'];
	$chi= $rowt['chi'];

	
	array_push($arrt,$id,$eng,$rec,$chi);
	
	array_push($arr,$arrt);
	//print_r($arr);
}

shuffle($arr);

echo json_encode($arr);

mysql_close($link_id);
?>