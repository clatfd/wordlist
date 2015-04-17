<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
$link_id=mysql_connect($DB_HOST,$DB_USER,$DB_PWD);
mysql_select_db("word");
mysql_query("SET NAMES 'utf8'");
$sql="UPDATE ".$_GET['list']." SET gro=gro+1 WHERE id =".$_GET['id'];
mysql_query($sql);

$iipp=$_SERVER["REMOTE_ADDR"];
$tim=localtime();
$dat=date("Y/m/d")." ".($tim[2]).":".$tim[1].":".$tim[0]; 

$groadd=$_GET['gro']+1;
$sql="INSERT INTO hist (list, action, eng, chi, grofrom, groto, date, ip)VALUES ('$_GET[list]','up','$_GET[eng]','$_GET[chi]','$_GET[gro]','$groadd','$dat','$iipp')";

mysql_query($sql);

mysql_close($link_id);


?>

</body>
</html>
