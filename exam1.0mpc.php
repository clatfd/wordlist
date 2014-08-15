<!--
mobile version using percentage
20130809
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
require_once("sys_conf.inc");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>wordlist</title>
<link rel="stylesheet" type="text/css" href="cssmpc.css">
<script type="text/javascript" src="jquery-1.8.2.js"></script>
<script type="text/javascript" src="js.js"></script>
<script type="text/javascript" src="js_addfunction.js"></script>

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
<table width="1000" id="mtable" border="0" cellspacing="0" cellpadding="0">
<tr id="mtr1">
<td>
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
</td>
</tr>
<tr id="mtr2">

<td>
<img src="images/place.png" id="mplace"/>
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




	<div class="examdiv" id="exam<? echo $j ?>" width="100%" height="100%">
	 <table width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0" id="wdtb<? echo $row["id"]; ?>">  
		<tr height="50%">
			<td colspan="3" align="center" valign="middle" id="wd<? echo $row["id"]; ?>" onclick="lookwd(<? echo $row["id"]; ?>,'<? echo $row["chi"]; ?>','<? echo $row["eng"]; ?>')"><span id="wdid<? echo $j ?>"><? echo $row["id"]; ?></span>&nbsp;&nbsp;&nbsp;<? echo $row["eng"]; ?></td>
		</tr>
		<tr height="20%">
			<td height="140"  colspan="3" align="center" valign="middle"><? echo $row["gro"]; ?>&nbsp;<? echo $row["rec"]; ?><a href="http://dict.cn/<? echo $row["eng"] ?>" target="_blank"><img src="images/favicon.ico" /></a>&nbsp;<img src="images/<? if(in_array($row["eng"], $implist)){ echo 'rec';} else { echo 'unr';} ?>.png" id="impunr<? echo $row["id"]; ?>" <? if(in_array($row["eng"], $implist)){}else{ echo "onclick=\"addtoimp(this,".$row['id'].",'". $_GET['list']."','". $row['eng'] ."','". $row['chi']."','".  $row['gro'] ."','".  $row['rec'] ."')\"";} ?>/></td>
		</tr>
		<tr height="30%" id="bt<? echo $row["id"]; ?>">
			<td width="33%" align="center" valign="middle"><span onclick="postd(<? echo $row["id"]; ?>,'<? echo $_GET['list'] ?>','<? echo $row["eng"] ?>','<? echo $row["chi"] ?>','<? echo $row["gro"]; ?>')"><img class="munr" src="images/unrec.JPG"  border="0" onclick="examremove(<? echo $j ?>)"/></span></td>
			<td width="34%" height="" align="center" valign="middle"><span onclick="totalnumsubone()"><img class="mskip" id="skipbutton<? echo $j ?>" src="images/skip.JPG" border="0" onclick="removej(<? echo $j ?>)"/></span></td>
			<td width="33%" height="" align="center" valign="middle" ><span onclick="postu(<? echo $row["id"]; ?>,'<? echo $_GET['list'] ?>','<? echo $row["eng"] ?>','<? echo $row["chi"] ?>','<? echo $row["gro"]; ?>')"><img class="mrem" src="images/rec.JPG" border="0" onclick="examremove(<? echo $j ?>)"/></span></td>
		</tr>
					
	 </table>  
     

</div>
<?php

}
?>

</td>
</tr>  
<tr id="mtr3">
<td>



  <span  class="menu">
 
  	total number:<span id="totnum"><?php echo $j+1; ?></span> 
	&nbsp;&nbsp;
	Ip:<? echo $_SERVER["REMOTE_ADDR"];?> </span> 
	<button id="undo" style="opacity: 0.01;" onclick="undo('<? echo $_GET['list'] ?>','exam')">  undo  </button>
	  
	<a href="default.php?list=<? echo $_GET['list'] ?>&amp;gro=<? echo $_GET['gro'] ?>&amp;idlo=<? echo $_GET['idlo'] ?>&amp;idup=<? echo $_GET['idup'] ?>""><button id="backtolist(B)">Back_to_list</button></a>
<br/>

 <a class="menu" href="default.php?list=<? echo $_GET['list'] ?>&gro=<? echo $_GET['gro']-1 ?>&idlo=<? echo $_GET['idlo'] ?>&idup=<? echo $_GET['idup'] ?>">last_group </a>
	 &nbsp;&nbsp;
	 <a class="menu" href="default.php?list=<? echo $_GET['list'] ?>&gro=<? echo $_GET['gro']+1 ?>&idlo=<? echo $_GET['idlo'] ?>&idup=<? echo $_GET['idup'] ?>">next_group </a>
	&nbsp;&nbsp;
	<a class="menu" href="default.php?list=<? echo $_GET['list'] ?>&amp;gro=<? echo $_GET['gro'] ?>&amp;idlo=<? echo $_GET['idlo']-100 ?>&amp;idup=<? echo $_GET['idup']-100 ?>">last_list </a>
  	&nbsp;&nbsp;
	<a class="menu" href="default.php?list=<? echo $_GET['list'] ?>&amp;gro=<? echo $_GET['gro'] ?>&amp;idlo=<? echo $_GET['idlo']+100 ?>&amp;idup=<? echo $_GET['idup']+100 ?>">next_list </a> 
	&nbsp;&nbsp;
  	
  	<a class="menu" href="Index.html">return</a>


</td>
</tr>
</table>
<script type="text/javascript">
var ht=window.innerHeight;
var wt=window.innerWidth;
//alert(wt+"*"+ht);
//alert(document.body.scrollWidth+"|"+document.body.scrollHeight)
//alert(window.innerWidth+"|"+window.innerHeight);
//alert(document.body.clientWidth+"|"+document.body.clientHeight)
$("#mtable").width(wt);
$("#mtable").height(ht);
$("#mtr1").height(ht*0.1);
$("#mtr2").height(ht*0.7);
$("#mtr3").height(ht*0.2);
$("div.examdiv").height(ht*0.7);
$("div.examdiv").width(wt);
$("div.examdiv").css("top",ht*0.1);
$("div.examdiv").css("font-size",ht*0.07);
$("#mplace").height(ht*0.7);
$("img.mskip").height(ht*0.7*0.3);
$("img.munr").height(ht*0.7*0.3);
$("img.mrem").height(ht*0.7*0.3);

</script>
</body>
</html>

