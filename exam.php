<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_GET['list']."_".$_GET['gro']."_".$_GET['idlo']."~".$_GET['idup'] ?></title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript" src="js/js_addfunction.js"></script>

</head>



<body onkeyup="whichButton(event)">
<script type="text/javascript">
function whichButton(event)
{
	
	if(event.keyCode==32)
	{
		//alert(" ");
		//$("#skipspan").click();
		//
	//	$("#skipbutton").click();
		refreshexamwd();
		if($("#totnum").text()>0)
			totalnumsubone();
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
	if(event.keyCode==88)
	{
		//alert("x");
		$("#xiaomiversion").click();
	}	
//	else
//	alert(event.keyCode)
	if(event.keyCode==76)
	{
		//alert("l");
		$("#examwd").click();
		
	}
	

}
</script>
<form name="form1" id="form1" method="GET">
<span id="banner">List:<?php echo $_GET['list'] ?>

  <?php include('list.php') ?>

<span> &nbsp;&nbsp; Group:<span><?php echo $_GET['gro'] ?></span>
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
  <option><?php echo $_GET['idlo']-300 ?></option>
  <option><?php echo $_GET['idlo']-200 ?></option>
  <option><?php echo $_GET['idlo']-100 ?></option>
  <option <?php echo "selected=\"selected\"" ?>><?php echo $_GET['idlo'] ?></option>
  <option><?php echo $_GET['idlo']+100 ?></option>
  <option><?php echo $_GET['idlo']+200 ?></option>
  <option><?php echo $_GET['idlo']+300 ?></option>
 
</select>
&nbsp;to:<?php echo $_GET['idup'] ?></span>
<select name="idup">
  <option><?php echo $_GET['idup']-300 ?></option>
  <option><?php echo $_GET['idup']-200 ?></option>
  <option><?php echo $_GET['idup']-100 ?></option>
  <option <?php echo "selected=\"selected\"" ?>><?php echo $_GET['idup'] ?></option>
  <option><?php echo $_GET['idup']+100 ?></option>
  <option><?php echo $_GET['idup']+200 ?></option>
  <option><?php echo $_GET['idup']+300 ?></option>
</select>
<input name="submit" type="submit" value="检索" />

</span>
</form>
    
	<div class="examdiv"  width="1024">
	 <table width="1250" border="0" cellspacing="0" cellpadding="0" id="wdtb">  
		<tr>
			<td height="200"  colspan="3" align="center" valign="middle" id="examwd"><span></span>&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td height="140"  colspan="3" align="center" valign="middle" ><span id="examtdrec"></span><a id="examdict" href="" target="_blank"><img src="images/favicon.ico" /></a>&nbsp;<span id="examrecunrimg"></span></td>
		</tr>
		<tr id="exambt">
			<td width="33%" height="30" align="center" valign="middle"><span onclick="refreshexamwd()"><img id="examdownbutton" src="images/unrec.JPG"  border="0" onclick=""/></span></td>
			<td width="34%" height="30" align="center" valign="middle"><span id="spanskipbutton" onclick="totalnumsubone()"><img id="skipbutton" src="images/skip.JPG" border="0" onclick="refreshexamwd()"/></span></td>
			<td width="33%" height="30" align="center" valign="middle" ><span onclick="refreshexamwd()"><img id="examupbutton" src="images/rec.JPG" border="0" onclick="" /></span></td>
		</tr>
					
	 </table>  
     

</div>



<div id="examswitchbar">	


  <span  class="menu">
 
  	total number:<span id="totnum"></span> 
	&nbsp;&nbsp;
	Ip:<?php echo $_SERVER["REMOTE_ADDR"];?>
 </span> 
	<button id="undo" style="opacity: 0.01;" onclick="undo('<?php echo $_GET['list'] ?>','exam')">  undo  </button>
	&nbsp;&nbsp;
	<a href="twig.php?list=<?php echo $_GET['list'] ?>&amp;gro=<?php echo $_GET['gro'] ?>&amp;idlo=<?php echo $_GET['idlo'] ?>&amp;idup=<?php echo $_GET['idup'] ?>""><button id="backtolist">Back_to_list(B)</button></a>
	&nbsp;&nbsp;
<a href="examm.php?list=<?php echo $_GET['list'] ?>&amp;gro=<?php echo $_GET['gro'] ?>&amp;idlo=<?php echo $_GET['idlo'] ?>&amp;idup=<?php echo $_GET['idup'] ?>"><button id="xiaomiversion">Xiaomi version(X)</button></a>

<iframe frameborder="0" height="18px"  scrolling="no" marginheight="0px" src="/H-wordlist/briefsta.php?list=<?php echo $_GET['list'] ?>&amp;idlo=<?php echo $_GET['idlo'] ?>&amp;idup=<?php echo $_GET['idup'] ?>" id="ifrmstatdefault">	</iframe>
<br/>
<?php include("switchbar.php");
?>
</div>
<script>
initialforwdlist();
shuffle(wdlist);
refreshexamwd();
</script>
</body>
</html>

