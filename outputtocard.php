<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_GET['list']."_".$_GET['gro']."_".$_GET['idlo']."~".$_GET['idup'] ?></title>
</head>

<body>
<table border="1" cellspacing="0" cellpadding="0">
<tr>
<?php require_once("sys_conf.inc");


	$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
	mysql_select_db($DBNAME);
	mysql_query("SET NAMES 'utf8'");
	$sql="Select * from ".$_GET['list']."  where gro=".$_GET['gro']." and id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);	
	$result=mysql_query($sql);
	
	$i=0;
	
	
	
	while ($row=mysql_fetch_array($result))
	{
	
	$i++;


  if($i>68)	{echo "overflow!!";break;}
 ?>  
	<td width="183"><p align="right"><strong><?php echo $row["eng"];  ?></strong></p></td>
	
	 <?php if($i%4==0&&$i<=68)
		echo "</tr><tr>";
	
	
   }
   
 //  echo "<tr><td colspan=\"4\">--------</td> </tr>";
 
  while($i<68)
  {
  ?>
  	<td width="183"><p align="right"><strong>&nbsp;</strong></p></td>
	
	 <?php $i++;
	 if($i%4==0&&$i<69)
		echo "</tr><tr>";
}
  
  
  
   $sql="Select * from ".$_GET['list']."  where gro=".$_GET['gro']." and id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);	
	
	
	$result=mysql_query($sql);
	
	$i=0;
	
	$rowt = array();	
	for($t=0;$t<68;$t++)
		$rowt[$t]="";

   while ($row=mysql_fetch_array($result))
	{
	
	$rowt[(floor($i/4+1)*2-1)*4-1-$i]=$row["chi"];
	$i++;
	}
//	print_r ($rowt);
	
	for($d=0;$d<68;$d++)
	{
	?>
	<td width="183"><p><strong><?php echo $rowt[$d];  ?></strong></p></td>
	 <?php if($d%4==3&&$d<68)
		echo "</tr><tr>";
	
	
	}
  ?>
  </tr>
</table>
</body>
</html>
