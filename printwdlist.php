<?php require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
$filename="output/wdlist_".$_GET['list']."_".$_GET['gro']."_".$_GET['idlo']."~".$_GET['idup'].".js";


$link_id=mysql_connect($DB_HOST,$DB_USER,$DB_PWD);
mysql_select_db("word");
mysql_query("SET NAMES 'utf8'");

$fp=fopen("$filename", "w+"); //打开文件指针，创建文件
	if ( !is_writable($filename) )
      die("文件:" .$filename. "不可写，请检查！");

$sql="Select * from ".$_GET['list']."  where gro=".$_GET['gro']." and id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);	
$result=mysql_query($sql);

$data="wdlist=[";
while ($rowt=mysql_fetch_array($result))
{	

	$data=$data."[".$rowt['id'].",'".$rowt['eng']."','".$rowt['rec']."','".$rowt['chi']."'],";
}
	$data=substr_replace($data, ']', strlen($data.length),1);

fwrite($fp,$data);
mysql_close($link_id);
?>