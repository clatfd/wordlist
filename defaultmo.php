<!--
mobile output version using css without centering
20130819
-->
<?php
 ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
require_once("sys_conf.inc");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? echo $_GET['list']."_".$_GET['gro']."_".$_GET['idlo']."~".$_GET['idup']."(".date("Y-m-d").")" ?></title>
<link rel="stylesheet" type="text/css" href="cssnc.css">
<script type="text/javascript" src="jquery-1.8.2.js"></script>
<script type="text/javascript" src="js.js"></script>
<script type="text/javascript" src="js_addfunction.js"></script>


</head>



<body onkeyup="whichButton(event)">
<script type="text/javascript">
saveasfile('<? echo $_GET['list']."_".$_GET['gro']."_".$_GET['idlo']."~".$_GET['idup']."(".date("Y-m-d").")" ?>');
function whichButton(event)
{
	if(event.keyCode==83)
	{
		//alert("s");
		$("#showall").click();
	}
	if(event.keyCode==82)
	{
		//alert("r");
		$("#rev").click();
	}
	if(event.keyCode==71)
	{
		//alert("g");
		$("#gotoexam").click();
	}
	if(event.keyCode==85)
	{
		//alert("u");
		$("#undo").click();
	}	
	if(event.keyCode==80)
	{
		//alert("p");
		$("#printcard").click();
	}	
}
</script>

<form name="form1" id="form1" method="GET">
<span id="banner">
List:<? echo $_GET['list'] ?>

  <? include('list.php') ?>

&nbsp;&nbsp; Group:<? echo $_GET['gro'] ?>
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
  <option><? echo $_GET['idlo']-400 ?></option>
  <option><? echo $_GET['idlo']-300 ?></option>
  <option><? echo $_GET['idlo']-200 ?></option>
  <option><? echo $_GET['idlo']-100 ?></option>
  <option <? echo "selected=\"selected\"" ?>><? echo $_GET['idlo'] ?></option>
  <option><? echo $_GET['idlo']+100 ?></option>
  <option><? echo $_GET['idlo']+200 ?></option>
  <option><? echo $_GET['idlo']+300 ?></option>
  <option><? echo $_GET['idlo']+400 ?></option>
 
</select>
&nbsp;to:<? echo $_GET['idup'] ?>
<select name="idup">
  <option><? echo $_GET['idup']-400 ?></option>
  <option><? echo $_GET['idup']-300 ?></option>
  <option><? echo $_GET['idup']-200 ?></option>
  <option><? echo $_GET['idup']-100 ?></option>
  <option <? echo "selected=\"selected\"" ?>><? echo $_GET['idup'] ?></option>
  <option><? echo $_GET['idup']+100 ?></option>
  <option><? echo $_GET['idup']+200 ?></option>
  <option><? echo $_GET['idup']+300 ?></option>
  <option><? echo $_GET['idup']+400 ?></option>
</select>
<input name="submit" type="submit" value="检索" />
Xiaomi Version
<span id="reviewmodespan"></span>

</span>
</form>


<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    
	<?php
	
	$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
	mysql_select_db($DBNAME);
	mysql_query("SET NAMES 'utf8'");
	$implist = array(); 
	
	$sql="Select * from imp ";	
	$implisttemp=mysql_query($sql);
	while ($rowi=mysql_fetch_array($implisttemp))
	{	
		array_push($implist, $rowi[3]);
	}
	$sql="Select * from i_mfl ";	
	$implisttemp=mysql_query($sql);
	while ($rowii=mysql_fetch_array($implisttemp))
	{	
		array_push($implist, $rowii[3]);
	}
	$sql="Select * from i_ivt ";	
	$implisttemp=mysql_query($sql);
	while ($rowiii=mysql_fetch_array($implisttemp))
	{	
		array_push($implist, $rowiii[3]);
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




	<td>
	 <table width="250" border="0" cellspacing="0" cellpadding="0" id="wdtb<? echo $row["id"]; ?>">  
		<tr>
			<td height="70" colspan="2" align="center" valign="middle" id="wd<? echo $row["id"]; ?>" onclick="lookwd(<? echo $row["id"]; ?>,'<? echo $row["chi"]; ?>','<? echo $row["eng"]; ?>')"  ondblclick="looksound('<? echo $row["eng"]; ?>')"><? echo $row["id"]; ?>&nbsp;&nbsp;&nbsp;<? echo $row["eng"]; ?></td>
		</tr>
		<tr>
			<td height="40" colspan="2" align="center" valign="middle"><? echo $row["gro"]; ?>&nbsp;<? echo $row["rec"]; ?><a href="http://dict.cn/<? echo $row["eng"] ?>" target="_blank"><img src="images/favicon.ico"/></a>&nbsp;<img src="images/<? if(in_array($row["eng"], $implist)){ echo 'rec';} else { echo 'unr';} ?>.png" id="impunr<? echo $row["id"]; ?>" <? if(in_array($row["eng"], $implist)){}else{ echo "onclick=\"addtoimp(this,".$row['id'].",'". $_GET['list']."','". $row['eng'] ."','". $row['chi']."','".  $row['gro'] ."','".  $row['rec'] ."')\"";} ?>/></td>
		</tr>
		<tr id="bt<? echo $row["id"]; ?>">
			<td width="50%" height="30" align="center" valign="middle" onclick="postu(<? echo $row["id"]; ?>,'<? echo $_GET['list'] ?>','<? echo $row["eng"] ?>','<? echo $row["chi"] ?>','<? echo $row["gro"]; ?>')"><img src="images/up.png" width="52" height="18" border="0" /></td>
			<td width="50%" align="center" valign="middle" onclick="postd(<? echo $row["id"]; ?>,'<? echo $_GET['list'] ?>','<? echo $row["eng"] ?>','<? echo $row["chi"] ?>','<? echo $row["gro"]; ?>')"><img src="images/down.jpg" width="52" height="18" border="0" /></td>
		</tr>
					
	 </table>  
	</td>     


<?php
if ($j%5==4)
	echo "</tr><tr>";
}
?>
  </tr>

	</td>
  </tr>

</table>

<p class="menu">
  total number:<span id="totnum"><?php echo $j+1; ?></span>
  &nbsp;&nbsp;
  Ip:<? echo $_SERVER["REMOTE_ADDR"];?>
</p>
<button id="undo" style="opacity: 0.01;" onclick="undo('<? echo $_GET['list'] ?>','default')">  Undo(U)  </button>
&nbsp;&nbsp;
<button id="rev" onclick="revall()">Review_mode(R)</button>
  
<a href="examm.php?list=<? echo $_GET['list'] ?>&amp;gro=<? echo $_GET['gro'] ?>&amp;idlo=<? echo $_GET['idlo'] ?>&amp;idup=<? echo $_GET['idup'] ?>"><button id="gotoexam">Go_to_exam(G)</button></a>
&nbsp;&nbsp;
<button id="showall" onclick="showall(<? echo $_GET['idlo'] ?>,<? echo $_GET['idup'] ?>)">Show_all(S)</button>
&nbsp;&nbsp;
<a href="outputtocard.php?list=<? echo $_GET['list'] ?>&amp;gro=<? echo $_GET['gro'] ?>&amp;idlo=<? echo $_GET['idlo'] ?>&amp;idup=<? echo $_GET['idup'] ?>"><button id="printcard">Print_cards(P)</button></a>
　<!--<input onclick=document.all.WebBrowser.ExecWB(4,1) type=button value=另存为 name=Button2> -->

<br/>
<iframe frameborder="0" height="22px"  scrolling="no" marginheight="0px" src="/H-wordlist/briefsta.php?list=<? echo $_GET['list'] ?>&amp;idlo=<? echo $_GET['idlo'] ?>&amp;idup=<? echo $_GET['idup'] ?>">	</iframe>
<br/>


<?php
	include("switchbar.php");
?>
</body>
</html>

<?php
$info=ob_get_contents();
$file=fopen('output/L_'.$_GET['list']."_".$_GET['gro']."_".$_GET['idlo']."~".$_GET['idup']."(".date("Y-m-d").').html','w');
fwrite($file,$info);
fclose($file);
?>