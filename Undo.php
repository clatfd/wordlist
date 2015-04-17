<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
$iipp=$_SERVER["REMOTE_ADDR"];
$tim=localtime();
$dat=date("Y/m/d")." ".($tim[2]+8).":".$tim[1].":".$tim[0]; 

$link_id=mysql_connect($DB_HOST,$DB_USER,$DB_PWD);
mysql_select_db("word");
mysql_query("SET NAMES 'utf8'");

if($_GET['dire']=='up'){
	$sql="UPDATE ".$_GET['list']." SET gro=gro+1 WHERE id =".$_GET['id'];
	//echo $sql;
	mysql_query($sql);
}
else if($_GET['dire']=='down'){
	$sql="UPDATE ".$_GET['list']." SET gro=gro-1 WHERE id =".$_GET['id'];
	//echo $sql;
	mysql_query($sql);
}
$sql="INSERT INTO hist (list, action, eng,  date, ip)VALUES ('$_GET[list]','undo','$_GET[eng]','$dat','$iipp')";
mysql_query($sql);
mysql_close($link_id);

?>
</body>
</html>
