<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<table>
<tr>
<td><?php echo $_GET['list'] ?>:</td>


<?php
	require_once("sys_conf.inc");
	$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
	mysql_select_db($DBNAME);
	mysql_query("SET NAMES 'utf8'");
	$sql="Select * from ".$_GET['list']." where gro=1";	
	$result=mysql_query($sql);
	$i1=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	$i1++;
	}
	
	$sql="Select * from ".$_GET['list']."  where gro=2";	
	$result=mysql_query($sql);
	$i2=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	$i2++;
	}
	
	
	$sql="Select * from ".$_GET['list']."  where gro=3";	
	$result=mysql_query($sql);
	$i3=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	$i3++;
	}
	
	$sql="Select * from ".$_GET['list']."  where gro=4";	
	$result=mysql_query($sql);
	$i4=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	$i4++;
	}
	
	$sql="Select * from ".$_GET['list']."  where gro=5";	
	$result=mysql_query($sql);
	$i5=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	$i5++;
	}
	
	
	$total=$i1+$i2+$i3+$i4+$i5;
	
	?>


<td>
	<?php
	echo "group 1:  ".$i1."<br />";
	echo "group 2:  ".$i2."<br />";
	echo "group 3:  ".$i3."<br />";
	echo "group 4:  ".$i4."<br />";
	echo "group 5:  ".$i5."<br />";

?>
</td>

<td>
<?php 
	echo $i1*100/$total."%<br />";
	echo $i2*100/$total."%<br />";
	echo $i3*100/$total."%<br />";
	echo $i4*100/$total."%<br />";
	echo $i5*100/$total."%<br />";
?>
</td>

</tr>
</table>

<a class="menu" href="Index.html">return</a>
</body>
</html>
