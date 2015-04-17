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

$iipp=$_SERVER["REMOTE_ADDR"];
$tim=localtime();
$dat=date("Y/m/d")." ".($tim[2]+8).":".$tim[1].":".$tim[0]; 


//echo "SELECT * FROM $_GET[list] WHERE eng ='$_GET[eng]'";
$sql="SELECT * FROM $_GET[list] WHERE eng ='$_GET[eng]'";
$result=mysql_query($sql);
$rowt=mysql_fetch_array($result);
$chi= $rowt['chi'];
$gro=$rowt['gro'];
echo $chi;
echo $gro;

if($gro&&$chi)
{
//echo "DELETE FROM $_GET[list] WHERE eng='$_GET[eng]'";
$sql="DELETE FROM $_GET[list] WHERE eng='$_GET[eng]'";

mysql_query($sql);


$sql="INSERT INTO hist (list,action, eng, chi, grofrom, groto, date, ip)VALUES ('$_GET[list]','delete','$_GET[eng]','$chi','$gro','$gro','$dat','$iipp')";

mysql_query($sql);

}
mysql_close($link_id);


?>

</body>
</html>
