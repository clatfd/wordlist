<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
$link_id=mysql_connect($DB_HOST,$DB_USER,$DB_PWD);
mysql_select_db("word");
mysql_query("SET NAMES 'utf8'");

$sql="Select * from ".$_GET['ins'];	
$result=mysql_query($sql);
$arreng = array(); 
while ($rowt=mysql_fetch_array($result))
{
	$eng= $rowt['eng'];
	array_push($arreng,$eng);
}
//print_r($arreng);echo "<br/>";

if(in_array($_GET['eng'],$arreng))
{
	echo $_GET['eng']." repeat";
}
else
{
$iipp=$_SERVER["REMOTE_ADDR"];
$tim=localtime();
$dat=date("Y/m/d")." ".($tim[2]+8).":".$tim[1].":".$tim[0]; 
//echo "INSERT INTO $_GET[ins] (list, eng, chi, gro, rec , date, ip)VALUES ('$_GET[list]','$_GET[eng]','$_GET[chi]',1,'$_GET[rec]','$dat','$iipp')";
$sql="INSERT INTO $_GET[ins] (list, eng, chi, gro, rec , date, ip)VALUES ('$_GET[list]','$_GET[eng]','$_GET[chi]',1,'$_GET[rec]','$dat','$iipp')";
}
mysql_query($sql);

mysql_close($link_id);


?>

</body>
</html>
