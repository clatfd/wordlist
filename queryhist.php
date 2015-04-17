
<?php require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
$link_id=mysql_connect($DB_HOST,$DB_USER,$DB_PWD);
mysql_select_db("word");
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
