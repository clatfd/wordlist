<?php
require_once("sys_conf.inc");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'utf8'");
$list=$_GET['list'];
$eng=$_GET['eng'];
$maxid=1;
$rep=0;
$sql="SELECT * FROM $_GET[list]";
$result=mysql_query($sql);
while ($rowt=mysql_fetch_array($result))
{
	$id=$rowt['id'];
	if($id>$maxid)
		$maxid=$id;
	if($eng==$rowt['eng'])
	{
		$rep=1;
		break;
	}
}
if($rep==0)
	echo ($maxid+1);
else
	echo "R";
mysql_close($link_id);
?>