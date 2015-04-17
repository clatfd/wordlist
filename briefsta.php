<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
	$link_id=mysql_connect($DB_HOST,$DB_USER,$DB_PWD);
	mysql_select_db("word");
	mysql_query("SET NAMES 'utf8'");
	$sql="Select gro from ".$_GET['list']." where id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);
	$result=mysql_query($sql);
	$total=0;
	$i1=$i2=$i3=$i4=$i5=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
		if($rowt['gro']==1)
			$i1++;
		elseif($rowt['gro']==2)
			$i2++;
		elseif($rowt['gro']==3)
			$i3++;
		elseif($rowt['gro']==4)
			$i4++;
		elseif($rowt['gro']==5)
			$i5++;

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
	array_push($result,number_format($total,0,".",""));
	echo json_encode($result);
?>