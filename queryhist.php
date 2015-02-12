
<?php require_once("sys_conf.inc");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'utf8'");
$sql="select * from hist where eng= '".$_GET['eng']."'";
$actlist= array();
$sqlresult=mysql_query($sql);
while ($rowi=mysql_fetch_array($sqlresult)){
	if($rowi['action']=='down'||$rowi['action']=='up')	
	array_push($actlist, $rowi);
}
if (sizeof($actlist))
	echo json_encode(array('status' => 1,'histdata'=>$actlist ));
else
	echo json_encode(array('status' => 0));
mysql_close($link_id);

?>
