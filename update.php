<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update</title>
</head>

<body>
<?php require_once("sys_conf.inc");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'utf8'");

$iipp=$_SERVER["REMOTE_ADDR"];
$tim=localtime();
$dat=date("Y/m/d")." ".($tim[2]+8).":".$tim[1].":".$tim[0]; 




echo "UPDATE $_GET[list] SET gro=$_GET[gro], chi='$_GET[chi]', eng='$_GET[eng]', rec='$_GET[rec]' WHERE id =$_GET[id]";
$sql="UPDATE $_GET[list] SET gro=$_GET[gro], chi='$_GET[chi]', eng='$_GET[eng]', rec='$_GET[rec]' WHERE id =$_GET[id]";

mysql_query($sql);


$sql="INSERT INTO hist (list,action, eng, chi, grofrom, groto, date, ip)VALUES ('$_GET[list]','update','$_GET[eng]','$_GET[chi]','$_GET[gro]','$_GET[gro]','$dat','$iipp')";

mysql_query($sql);


mysql_close($link_id);


?>

</body>
</html>
