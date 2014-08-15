<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
require_once("sys_conf.inc");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>wordlist</title>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript" src="jquery-1.8.2.js"></script>
<script type="text/javascript" src="js.js"></script>

</head>



<body onkeyup="whichButton(event)">
<script type="text/javascript">
function whichButton(event)
{
	
	if(event.keyCode==32)
	{
		delenum=parseInt($("#totnum").text())-1;
		//alert(" ");
		//$("#skipspan").click();
		$("#skipbutton"+delenum).click();
	}
	if(event.keyCode==66)
	{
		//alert("b");
		$("#backtolist").click();
	}
	if(event.keyCode==85)
	{
		//alert("u");
		$("#undo").click();
	}
//	else
//	alert(event.keyCode)
	if(event.keyCode==76)
	{
		//alert("l");
		delenum=parseInt($("#totnum").text())-1;
		if($("#wdid"+delenum).length>0)		//exist
			wdid=$("#wdid"+delenum).text();

		$("#wd"+wdid).click();
		
	}
	

}
</script>
<form name="form1" id="form1" method="GET">
<span id="banner">List:<? echo $_GET['list'] ?>

  <? include('list.php') ?>

<span> &nbsp;&nbsp; Group:<span><? echo $_GET['gro'] ?></span>
<select name="gro">
  <option <? if($_GET['gro']==0) echo "selected=\"selected\"" ?>>0</option>
  <option <? if($_GET['gro']==1) echo "selected=\"selected\"" ?>>1</option>
  <option <? if($_GET['gro']==2) echo "selected=\"selected\"" ?>>2</option>
  <option <? if($_GET['gro']==3) echo "selected=\"selected\"" ?>>3</option>
  <option <? if($_GET['gro']==4) echo "selected=\"selected\"" ?>>4</option>
  <option <? if($_GET['gro']==5) echo "selected=\"selected\"" ?>>5</option>
</select>
&nbsp;&nbsp; Idfrom:<? echo $_GET['idlo'] ?>
<select name="idlo">
  <option><? echo $_GET['idlo']-300 ?></option>
  <option><? echo $_GET['idlo']-200 ?></option>
  <option><? echo $_GET['idlo']-100 ?></option>
  <option <? echo "selected=\"selected\"" ?>><? echo $_GET['idlo'] ?></option>
  <option><? echo $_GET['idlo']+100 ?></option>
  <option><? echo $_GET['idlo']+200 ?></option>
  <option><? echo $_GET['idlo']+300 ?></option>
 
</select>
&nbsp;to:<? echo $_GET['idup'] ?></span>
<select name="idup">
  <option><? echo $_GET['idup']-300 ?></option>
  <option><? echo $_GET['idup']-200 ?></option>
  <option><? echo $_GET['idup']-100 ?></option>
  <option <? echo "selected=\"selected\"" ?>><? echo $_GET['idup'] ?></option>
  <option><? echo $_GET['idup']+100 ?></option>
  <option><? echo $_GET['idup']+200 ?></option>
  <option><? echo $_GET['idup']+300 ?></option>
</select>
<input name="submit" type="submit" value="检索" />

</span>
</form>
    
	<?php
	
	$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
	mysql_select_db($DBNAME);
	mysql_query("SET NAMES 'utf8'");
	$sql="Select * from imp ";	
	$implisttemp=mysql_query($sql);
	$implist = array(); 
	while ($rowi=mysql_fetch_array($implisttemp))
	{	
		array_push($implist, $rowi[3]);
	}
	$sql="Select * from ".$_GET['list']."  where gro=".$_GET['gro']." and id>".($_GET['idlo']-1)." and id<".($_GET['idup']+1);	
	$result=mysql_query($sql);
	$i=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	
	
	array_push($arr, $rowt);
	$i++;
	}
	shuffle($arr);
	//print_r($arr);
	$j=-1;
	while($i)
	{
	$i--;
	$j++;
	$row=$arr[$i];
	//print_r($row);
	//echo ("</br>");
	
	?>




	<div class="examdiv" id="exam<? echo $j ?>" width="1024">
	 <table width="1250" border="0" cellspacing="0" cellpadding="0" id="wdtb<? echo $row["id"]; ?>">  
		<tr>
			<td height="200"  colspan="3" align="center" valign="middle" id="wd<? echo $row["id"]; ?>" onclick="lookwd(<? echo $row["id"]; ?>,'<? echo $row["chi"]; ?>','<? echo $row["eng"]; ?>')"><span id="wdid<? echo $j ?>"><? echo $row["id"]; ?></span>&nbsp;&nbsp;&nbsp;<? echo $row["eng"]; ?></td>
		</tr>
		<tr>
			<td height="140"  colspan="3" align="center" valign="middle"><? echo $row["gro"]; ?>&nbsp;<? echo $row["rec"]; ?><a href="http://dict.cn/<? echo $row["eng"] ?>" target="_blank"><img src="images/favicon.ico" /></a>&nbsp;<img src="images/<? if(in_array($row["eng"], $implist)){ echo 'rec';} else { echo 'unr';} ?>.png" id="impunr<? echo $row["id"]; ?>" <? if(in_array($row["eng"], $implist)){}else{ echo "onclick=\"addtoimp(this,".$row['id'].",'". $_GET['list']."','". $row['eng'] ."','". $row['chi']."','".  $row['gro'] ."','".  $row['rec'] ."')\"";} ?>/></td>
		</tr>
		<tr id="bt<? echo $row["id"]; ?>">
			<td width="33%" align="center" valign="middle"><span onclick="postd(<? echo $row["id"]; ?>,'<? echo $_GET['list'] ?>','<? echo $row["eng"] ?>','<? echo $row["chi"] ?>','<? echo $row["gro"]; ?>')"><img src="images/unrec.JPG"  border="0" onclick="examremove(<? echo $j ?>)"/></span></td>
			<td width="34%" height="30" align="center" valign="middle"><span onclick="totalnumsubone()"><img id="skipbutton<? echo $j ?>" src="images/skip.JPG" border="0" onclick="removej(<? echo $j ?>)"/></span></td>
			<td width="33%" height="30" align="center" valign="middle" ><span onclick="postu(<? echo $row["id"]; ?>,'<? echo $_GET['list'] ?>','<? echo $row["eng"] ?>','<? echo $row["chi"] ?>','<? echo $row["gro"]; ?>')"><img src="images/rec.JPG" border="0" onclick="examremove(<? echo $j ?>)"/></span></td>
		</tr>
					
	 </table>  
     

</div>
<?php

}
?>


<div id="examswitchbar">	


  <span  class="menu">
 
  	total number:<span id="totnum"><?php echo $j+1; ?></span> 
	&nbsp;&nbsp;
	Ip:<? echo $_SERVER["REMOTE_ADDR"];?>
 </span> 
	<button id="undo" style="opacity: 0.01;" onclick="undo('<? echo $_GET['list'] ?>','exam')">  undo  </button>
	&nbsp;&nbsp;
	<a href="default.php?list=<? echo $_GET['list'] ?>&amp;gro=<? echo $_GET['gro'] ?>&amp;idlo=<? echo $_GET['idlo'] ?>&amp;idup=<? echo $_GET['idup'] ?>""><button id="backtolist(B)">Back_to_list</button></a>
<br/>

<?
	include("switchbar.php");
?>
</div>
</body>
</html>

