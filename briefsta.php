<?php
	require_once("sys_conf.inc");
	$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
	mysql_select_db($DBNAME);
	mysql_query("SET NAMES 'utf8'");
	$sql="Select * from ".$_GET['list']." where gro=1 and id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);
	$result=mysql_query($sql);
	$i1=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	$i1++;
	}
	
	$sql="Select * from ".$_GET['list']."  where gro=2 and id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);	
	$result=mysql_query($sql);
	$i2=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	$i2++;
	}
	
	
	$sql="Select * from ".$_GET['list']."  where gro=3 and id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);	
	$result=mysql_query($sql);
	$i3=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	$i3++;
	}
	
	$sql="Select * from ".$_GET['list']."  where gro=4 and id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);	
	$result=mysql_query($sql);
	$i4=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	$i4++;
	}
	
	$sql="Select * from ".$_GET['list']."  where gro=5 and id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);	
	$result=mysql_query($sql);
	$i5=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	$i5++;
	}
	
	$sql="Select * from ".$_GET['list']." where id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);	
	$result=mysql_query($sql);
	$total=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	$total++;
	}
	

	$result=array();
	$out1=number_format($i1*100/$total,1);
	$out2=number_format($i2*100/$total,1);
	$out3=number_format($i3*100/$total,1);
	$out4=number_format($i4*100/$total,1);
	$out5=number_format($i5*100/$total,1);
	if($out1+$out2+$out3+$out4+$out5>100)
		$out1-=0.1;
	array_push($result,$out1."%");
	array_push($result,$out2."%");
	array_push($result,$out3."%");
	array_push($result,$out4."%");
	array_push($result,$out5."%");
	array_push($result,number_format($total,0));
	echo json_encode($result);
?>