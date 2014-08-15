<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php require_once("sys_conf.inc");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_GET['list']."_".$_GET['gro']."_".$_GET['idlo']."~".$_GET['idup'] ?></title>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript" src="jquery-1.8.2.js"></script>
<script type="text/javascript" src="js.js"></script>
<script type="text/javascript" src="js_addfunction.js"></script>


<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>



<body onkeyup="whichButton(event)">
<script type="text/javascript">

initialforwdlist();

function whichButton(event)
{
	if(event.keyCode==83)
	{
		//alert("s");
		$("#showall").click();
	}
	else if(event.keyCode==82)
	{
		//alert("r");
		$("#rev").click();
	}
	else if(event.keyCode==71)
	{
		//alert("g");
		$("#gotoexam").click();
	}
	else if(event.keyCode==85)
	{
		//alert("u");
		$("#undo").click();
	}	
	else if(event.keyCode==80)
	{
		//alert("p");
		$("#printcard").click();
	}	
	else if(event.keyCode==88)
	{
		//alert("x");
		$("#xiaomiversion").click();
	}	
	else if(event.keyCode==77)
	{
		//alert("m");
		$("#manconsole").click();
	}	
	else if(event.keyCode==13)
	{
		//alert("Enter");
		$("#formsubmit").click();
	}
	else if(event.keyCode==67)
	{
		//alert("c");
		$("#buttonchitoeng").click();
	}	
	else if(event.keyCode==76)
	{
		//alert("l");
		$("#buttonlastrevword").click();
	}	
//	else{alert(event.keyCode)}

	
}
</script>
<form name="form1" id="form1" method="GET">
<span id="banner">
List:<?php echo $_GET['list'] ?>

  <?php include('list.php') ?>

 &nbsp;&nbsp; Group:<?php echo $_GET['gro'] ?>
<select id="formgro" name="gro">
  <option <?php if($_GET['gro']==0) echo "selected=\"selected\"" ?>>0</option>
  <option <?php if($_GET['gro']==1) echo "selected=\"selected\"" ?>>1</option>
  <option <?php if($_GET['gro']==2) echo "selected=\"selected\"" ?>>2</option>
  <option <?php if($_GET['gro']==3) echo "selected=\"selected\"" ?>>3</option>
  <option <?php if($_GET['gro']==4) echo "selected=\"selected\"" ?>>4</option>
  <option <?php if($_GET['gro']==5) echo "selected=\"selected\"" ?>>5</option>
</select>
&nbsp;&nbsp; Idfrom:<?php echo $_GET['idlo'] ?>
<select name="idlo">
  <option><?php echo $_GET['idlo']-400 ?></option>
  <option><?php echo $_GET['idlo']-300 ?></option>
  <option><?php echo $_GET['idlo']-200 ?></option>
  <option><?php echo $_GET['idlo']-100 ?></option>
  <option <?php echo "selected=\"selected\"" ?>><?php echo $_GET['idlo'] ?></option>
  <option><?php echo $_GET['idlo']+100 ?></option>
  <option><?php echo $_GET['idlo']+200 ?></option>
  <option><?php echo $_GET['idlo']+300 ?></option>
  <option><?php echo $_GET['idlo']+400 ?></option>
 
</select>
&nbsp;to:<?php echo $_GET['idup'] ?>
<select name="idup">
  <option><?php echo $_GET['idup']-400 ?></option>
  <option><?php echo $_GET['idup']-300 ?></option>
  <option><?php echo $_GET['idup']-200 ?></option>
  <option><?php echo $_GET['idup']-100 ?></option>
  <option <?php echo "selected=\"selected\"" ?>><?php echo $_GET['idup'] ?></option>
  <option><?php echo $_GET['idup']+100 ?></option>
  <option><?php echo $_GET['idup']+200 ?></option>
  <option><?php echo $_GET['idup']+300 ?></option>
  <option><?php echo $_GET['idup']+400 ?></option>
</select>
<input id="formsubmit" name="submit" type="submit" value="检索" />
<span id="reviewmodespan"></span>
<span id="chitoengmodespan"></span>
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
	 <table width="250" border="0" cellspacing="0" cellpadding="0" id="wdtb<?php echo $row["id"]; ?>">  
		<tr>
			<td height="70" colspan="2" align="center" valign="middle" id="wd<?php echo $row["id"]; ?>" onclick="lookwd(<?php echo $row["id"]; ?>,'<?php echo $row["chi"]; ?>','<?php echo $row["eng"]; ?>')" ondblclick="looksound('<?php echo $row["eng"]; ?>')"><?php echo $row["id"]; ?>&nbsp;&nbsp;&nbsp;<?php echo $row["eng"]; ?></td>
		</tr>
		<tr>
			<td height="40" colspan="2" align="center" valign="middle"><?php echo $row["gro"]; ?>&nbsp;<?php echo $row["rec"]; ?><a href="http://dict.cn/<?php echo $row["eng"] ?>" target="_blank"><img src="images/favicon.ico"/></a>&nbsp;<img src="images/<?php if(in_array($row["eng"], $implist)){ echo 'rec';} else { echo 'unr';} ?>.png" id="impunr<?php echo $row["id"]; ?>" <?php /*if(in_array($row["eng"], $implist)){}else*/{ echo "onclick=\"addtoimp(this,".$row['id'].",'". $_GET['list']."','". $row['eng'] ."','". $row['chi']."','".  $row['gro'] ."','".  $row['rec'] ."')\"";} ?>/></td>
		</tr>
		<tr id="bt<?php echo $row["id"]; ?>">
			<td width="50%" height="30" align="center" valign="middle" onclick="postu(<?php echo $row["id"]; ?>,'<?php echo $_GET['list'] ?>','<?php echo $row["eng"] ?>','<?php echo $row["chi"] ?>','<?php echo $row["gro"]; ?>')"><img src="images/up.png" width="52" height="18" border="0" /></td>
			<td width="50%" align="center" valign="middle" onclick="postd(<?php echo $row["id"]; ?>,'<?php echo $_GET['list'] ?>','<?php echo $row["eng"] ?>','<?php echo $row["chi"] ?>','<?php echo $row["gro"]; ?>')"><img src="images/down.jpg" width="52" height="18" border="0" /></td>
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
  Remote_address:<?php echo $_SERVER["REMOTE_ADDR"];?>;
  Ip:<?php include('getip.php');?>
</p>
<button id="undo" style="opacity: 0.01;" onclick="undo('<?php echo $_GET['list'] ?>','default')">  Undo(U)  </button>
&nbsp;&nbsp;
<button id="rev" onclick="revall()">Review_mode(R)</button>
  
<a href="exam.php?list=<?php echo $_GET['list'] ?>&amp;gro=<?php echo $_GET['gro'] ?>&amp;idlo=<?php echo $_GET['idlo'] ?>&amp;idup=<?php echo $_GET['idup'] ?>"><button id="gotoexam">Go_to_exam(G)</button></a>
&nbsp;&nbsp;
<button id="showall" onclick="showall(<?php echo $_GET['idlo'] ?>,<?php echo $_GET['idup'] ?>)">Show_all(S)</button>
&nbsp;&nbsp;
<a href="outputtocard.php?list=<?php echo $_GET['list'] ?>&amp;gro=<?php echo $_GET['gro'] ?>&amp;idlo=<?php echo $_GET['idlo'] ?>&amp;idup=<?php echo $_GET['idup'] ?>"><button id="printcard">Print_cards(P)</button></a>
&nbsp;&nbsp;
<a href="defaultm.php?list=<?php echo $_GET['list'] ?>&amp;gro=<?php echo $_GET['gro'] ?>&amp;idlo=<?php echo $_GET['idlo'] ?>&amp;idup=<?php echo $_GET['idup'] ?>"><button id="xiaomiversion">Xiaomi version(X)</button></a>
&nbsp;&nbsp;
<button id="manconsole" onclick="manconsole('<?php echo  $_GET['list'] ?>')">Manual_Console(M)</button>
&nbsp;&nbsp;
<button id="buttonchitoeng" onclick="funchitoeng()">Chi_to_eng(C)</button>
&nbsp;&nbsp;
<button id="buttonlastrevword" onclick="funlastreviewwords()">Last_word(L)</button>

<!--　<input onclick=document.all.WebBrowser.ExecWB(4,1) type=button value=另存为 name=Button2> -->

<br/>
<iframe frameborder="0" height="18px"  scrolling="no" marginheight="0px" src="/H-wordlist/briefsta.php?list=<?php echo $_GET['list'] ?>&amp;idlo=<?php echo $_GET['idlo'] ?>&amp;idup=<?php echo $_GET['idup'] ?>" id="ifrmstatdefault">	</iframe>
<br/>


<?php
	include("switchbar.php");
?>




<script type="text/javascript">
//movable div
var $j=function(id){return document.getElementById(id);};
var getMouseP=function (e){
	//获取鼠标坐标 请传递evnet参数
	e = e || window.event;
	var m=(e.pageX || e.pageY)?{ x:e.pageX, y:e.pageY } : { x:e.clientX + document.body.scrollLeft - document.body.clientLeft, y:e.clientY + document.body.scrollTop  - document.body.clientTop };
	return m;
};
    
move=function(o,t){
	o=$j(o);
	t=$j(t);
	o.onmousedown=function(ev){
	
		var mxy=getMouseP(ev);//获取当前鼠标坐标
		var by={x:mxy.x-(t.offsetLeft),y:mxy.y-(t.offsetTop)};
		o.style.cursor="move";
		document.onmousemove=function(ev){
			var mxy=getMouseP(ev);
			t.style.left=mxy.x-by.x+"px";
			t.style.top=mxy.y-by.y+"px";
			t.style.opacity="0.8";
		};
		document.onmouseup=function(){
			//window.getSelection ? window.getSelection().removeAllRanges() : document.selection.empty();
			this.onmousemove=null;
			t.style.opacity="1";
		}
	}
}

// ]]>
</script>
</body>
</html>
