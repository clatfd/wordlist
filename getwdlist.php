<?php require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
$link_id=mysql_connect($DB_HOST,$DB_USER,$DB_PWD);
mysql_select_db("word");
mysql_query("SET NAMES 'utf8'");
//$list=$_GET['list'];
//$eng=$_GET['eng'];
$getgro=isset($_GET['gro'])?$_GET['gro']:'';
$sql="Select * from ".$_GET['list']."  where  id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);	
if(isset($getgro)&&$getgro!=''){
	if(strpos($getgro,","))
		$sql.=" and ( gro=".str_replace(',', ' or gro= ', $getgro).") ";
	else
		$sql.=" and gro=".$getgro;
}
$result=mysql_query($sql);
$arr = array(); 
while ($rowt=mysql_fetch_array($result))
{
	$arrt = array(); 
	$id=$rowt['id'];
	$eng= $rowt['eng'];
	$rec=$rowt['rec'];
	$chi= $rowt['chi'];

	
	array_push($arrt,$id,$eng,$rec,$chi);
	
	array_push($arr,$arrt);
	//print_r($arr);
}

shuffle($arr);

echo json_encode($arr);

mysql_close($link_id);
?>