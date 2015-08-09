<?php require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
$link_id=mysql_connect($DB_HOST,$DB_USER,$DB_PWD);
mysql_select_db("word");
mysql_query("SET NAMES 'utf8'");
$list=$_GET['list'];
$eng=$_GET['eng'];
$iipp=$_SERVER["REMOTE_ADDR"];
$tim=localtime();
$dat=date("Y/m/d")." ".$tim[2].":".$tim[1].":".$tim[0]; 
//echo "SELECT * FROM $_GET[list] WHERE eng ='$_GET[eng]'";
$sql="SELECT * FROM $_GET[list] WHERE eng ='$_GET[eng]'";
$result=mysql_query($sql);
$rowt=mysql_fetch_array($result);
$chi= $rowt['chi'];
$gro=$rowt['gro'];
$rec=$rowt['rec'];
$id=$rowt['id'];
if($chi&&$gro)
{
	$result = array();
	$result['id']=$id;
	$result['list']=$list;
	$result['eng']=$eng;	
	$result['chi']=$chi;	
	$result['gro']=$gro;
	$result['rec']=$rec;
	$result['dat']=$dat;
	$result['iipp']=$iipp;			
	//$list,$eng,$chi,$gro,$dat,$iipp
	//header('Content-type: text/javascript');
	echo json_encode($result);
	//print_r($result);
}
else
{
	$result=array();
	$result['chi'] ='null';
	echo json_encode($result);
}
mysql_close($link_id);
?>