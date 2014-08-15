<!--
mobile version using css without centering
20130809
--><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php require_once("sys_conf.inc");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_GET['list']."_".$_GET['gro']."_".$_GET['idlo']."~".$_GET['idup'] ?></title>
<link rel="stylesheet" type="text/css" href="cssnc.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="toastr.min.css">

<script type="text/javascript" src="jquery-1.8.2.js"></script>
<script type="text/javascript" src="toastr.min.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>
<script type="text/javascript" src="js_addfunction.js"></script>
<script type="text/javascript" src="js.js"></script>



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


</script>
<div class="container-fluid">
	<div class="row">
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
		<input id="formsubmit" type="submit" value="检索" />
		<span id="reviewmodespan"></span>
		<span id="chitoengmodespan"></span>
		</span>
		</form>
	</div>

	<div class="row">
	
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

	<div class="col-md-2 col-xs-3">
	 <table width="250" border="0" cellspacing="0" cellpadding="0" id="wdtb<?php echo $row["id"]; ?>">  
		<tr>
			<td height="70" colspan="2" align="center" valign="middle" class="wdeng" id="wd<?php echo $row["id"]; ?>" onclick="lookwd(<?php echo $row["id"]; ?>,'<?php echo $row["chi"]; ?>','<?php echo $row["eng"]; ?>',<?php echo $j ?>)" ondblclick="looksound('<?php echo $row["eng"]; ?>')"><?php echo $row["id"]; ?>&nbsp;&nbsp;&nbsp;<?php echo $row["eng"]; ?></td>
		</tr>
		<tr>
			<td height="40" colspan="2" align="center" valign="middle"><?php echo $row["gro"]; ?>&nbsp;<?php echo $row["rec"]; ?>&nbsp;<a href="http://dict.cn/<?php echo $row["eng"] ?>" target="_blank"><img src="images/favicon.ico"/></a>&nbsp;<img src="images/<?php if(in_array($row["eng"], $implist)){ echo 'rec';} else { echo 'unr';} ?>.png" id="impunr<?php echo $row["id"]; ?>" <?php /*if(in_array($row["eng"], $implist)){}else*/{ echo "onclick=\"addtoimp(this,".$row['id'].",'". $_GET['list']."','". $row['eng'] ."','". $row['chi']."','".  $row['gro'] ."','".  $row['rec'] ."')\"";} ?>/></td>
		</tr>
		<tr id="bt<?php echo $row["id"]; ?>">
			<td width="50%" height="30" align="center" valign="middle" onclick="postu(<?php echo $row["id"]; ?>,'<?php echo $_GET['list'] ?>','<?php echo $row["eng"] ?>','<?php echo $row["chi"] ?>','<?php echo $row["gro"]; ?>')"><img src="images/up.png" width="52" height="18" border="0" /></td>
			<td width="50%" align="center" valign="middle" onclick="postd(<?php echo $row["id"]; ?>,'<?php echo $_GET['list'] ?>','<?php echo $row["eng"] ?>','<?php echo $row["chi"] ?>','<?php echo $row["gro"]; ?>')"><img src="images/down.jpg" width="52" height="18" border="0" /></td>
		</tr>
					
	 </table>  
	</div>     


<?php
//if ($j%6==5)
//	echo "</div><div class=\"row\">";
}
?>
 
  </div>


	<div class="row">
		<div class="col-md-3 col-xs-4">
			<span class="menu">
			  total number:<span id="totnum"><?php echo $j+1; ?></span>
			</span>
		</div>
		<div class="col-md-4 col-xs-6">
			<span class="menu">
			  Remote_address:<?php echo $_SERVER["REMOTE_ADDR"];?>;
			</span>
		</div>
		<div class="col-md-5 col-xs-8">
			<span class="menu">
			  Ip:<?php include('getip.php');?>
			</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-1 col-xs-4">
			<button id="undo" style="opacity: 0.01;" onclick="undo('<?php echo $_GET['list'] ?>','default')">  Undo(U)  </button>
		</div>
		<div class="col-md-1 col-xs-4">
			<button id="rev" onclick="revall()">R_mode(R)</button>
		</div>
	  	<div class="col-md-1 col-xs-4">
			<a href="exam.php?list=<?php echo $_GET['list'] ?>&amp;gro=<?php echo $_GET['gro'] ?>&amp;idlo=<?php echo $_GET['idlo'] ?>&amp;idup=<?php echo $_GET['idup'] ?>"><button id="gotoexam">Go2exam(G)</button></a>
		</div>
		<div class="col-md-1 col-xs-4">
			<button id="showall" onclick="showall(<?php echo $_GET['idlo'] ?>,<?php echo $_GET['idup'] ?>)">Show_all(S)</button>
		</div>
		<div class="col-md-1 col-xs-4">
			<a href="outputtocard.php?list=<?php echo $_GET['list'] ?>&amp;gro=<?php echo $_GET['gro'] ?>&amp;idlo=<?php echo $_GET['idlo'] ?>&amp;idup=<?php echo $_GET['idup'] ?>"><button id="printcard">Print_cards(P)</button></a>
		</div>
		<div class="col-md-1 col-xs-4">
			<a href="defaultm.php?list=<?php echo $_GET['list'] ?>&amp;gro=<?php echo $_GET['gro'] ?>&amp;idlo=<?php echo $_GET['idlo'] ?>&amp;idup=<?php echo $_GET['idup'] ?>"><button id="xiaomiversion">X_version(X)</button></a>
		</div>
		<div class="col-md-1 col-xs-4">
			<button id="manconsole" onclick="manconsole('<?php echo  $_GET['list'] ?>')">M_Console(M)</button>
		</div>
		<div class="col-md-1 col-xs-4">
			<button id="buttonchitoeng" onclick="funchitoeng()">Chi_to_eng(C)</button>
		</div>
		<div class="col-md-1 col-xs-4">
			<button id="buttonlastrevword" onclick="funlastreviewwords()">Last_word(L)</button>
		</div>
		<div class="col-md-1 col-xs-4">
			<button id="buttonlooknextword" onclick="looknextword()">Next_word(N)</button>
		</div>

	</div>
	<div class="row">
		<div class="col-md-1 col-xs-18">
			<iframe frameborder="0" height="18px"  scrolling="no" marginheight="0px" src="/H-wordlist/briefsta.php?list=<?php echo $_GET['list'] ?>&amp;idlo=<?php echo $_GET['idlo'] ?>&amp;idup=<?php echo $_GET['idup'] ?>" id="ifrmstatdefault">	</iframe>
		</div>
	</div>


<?php
	include("switchbar.php");
?>

<!--content end-->
</div>


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
