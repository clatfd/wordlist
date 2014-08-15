<?php require_once("sys_conf.inc");
$filename="output/impwdlist.js";


$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'utf8'");

$fp=fopen("$filename", "w+"); //打开文件指针，创建文件
	if ( !is_writable($filename) )
      die("文件:" .$filename. "不可写，请检查！");

$data1=array();
$data2=array();
$data3=array();

$sql="Select * from imp";	
$result=mysql_query($sql);
while ($rowt=mysql_fetch_array($result))
{	
	array_push($data1,$rowt[3]);
}
//print_r($data1);
//echo sizeof($data1);
$sql="Select * from i_mfl";	
$result=mysql_query($sql);
while ($rowt=mysql_fetch_array($result))
{	
	array_push($data2,$rowt[3]);
}
$sql="Select * from i_ivt";	
$result=mysql_query($sql);
while ($rowt=mysql_fetch_array($result))
{	
	array_push($data3,$rowt[3]);
}


$data="impwdlist=[[";
for($i=0;$i<sizeof($data1);$i++)
{
	$data=$data."'".$data1[$i]."',";
}
for($i=0;$i<sizeof($data2);$i++)
{
	$data=$data."'".$data2[$i]."',";
}
for($i=0;$i<sizeof($data3);$i++)
{
	$data=$data."'".$data3[$i]."',";
}	
	$data=substr_replace($data, ']', strlen($data)-1,1);
	$data=$data.",[";
	
for($i=0;$i<sizeof($data1);$i++)
{
	$data=$data."'".$data1[$i]."',";
}
	$data=substr_replace($data, ']', strlen($data)-1,1);
	$data=$data.",[";
	
for($i=0;$i<sizeof($data2);$i++)
{
	$data=$data."'".$data2[$i]."',";
}
	$data=substr_replace($data, ']', strlen($data)-1,1);
	$data=$data.",[";
	
for($i=0;$i<sizeof($data3);$i++)
{
	$data=$data."'".$data3[$i]."',";
}
	$data=substr_replace($data, ']]', strlen($data)-1,1);

fwrite($fp,$data);



$filenamec="../wordlist/1/output/impwdlist.js";
$fpc=fopen("$filenamec", "w+"); //打开文件指针，创建文件
	if ( !is_writable($filenamec) )
      die("文件:" .$filenamec. "不可写，请检查！");
fwrite($fpc,$data);

mysql_close($link_id);
?>