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


</head>



<body>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    
<?

$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'utf8'");
$sql="Select * from ".$_GET['list']."  where gro=".$_GET['gr']." and id>".$_GET['idlo']." and id<".$_GET['idup'];	
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


<script type="text/javascript">
function lookwd<? echo $row["id"]; ?>()
{

	
	$("#wd<? echo $row['id']; ?>").html("<? echo $row["chi"]; ?>");
	$("#wd<? echo $row['id']; ?>").delay(3000);
	$("#wd<? echo $row['id']; ?>").fadeTo("slow",0.01);
    $('#wd<? echo $row['id']; ?>').css({"color":"#0000ff","text-decoration":"none","background-color":"yellow",'font-weight' : 'bolder'});

	var t=setTimeout("$('#wd<? echo $row["id"]; ?>').html('<? echo $row["eng"]; ?>')",3500)
	var t=setTimeout("$('#wd<? echo $row["id"]; ?>').fadeTo('slow',0.99)",3500);
	

}

function postu<? echo $row["id"]; ?>()
{
	$.ajax({url: "Up.php?list=<? echo($_GET['list'])?>&id=<? echo $row['id']; ?>",success: function (){$("#wdtb<? echo $row['id']; ?>").remove();}});
}
function postd<? echo $row["id"]; ?>()
{
	$.ajax({url: "Down.php?list=<? echo($_GET['list']) ?>&id=<? echo $row['id']; ?>",success: function (){$("#wdtb<? echo $row['id']; ?>").remove();}});
}
//function delrun()
//{
//	$('#wd<? echo $row->id; ?>').html('<? echo $row->eng; ?>');
//	$('#wd<? echo $row->id; ?>').fadeTo('slow',0.99);
	
//}

</script>

<td>
 <table width="250" border="0" cellspacing="0" cellpadding="0" id="wdtb<? echo $row["id"]; ?>">  
	<tr>
    	<td height="70" colspan="2" align="center" valign="middle" id="wd<? echo $row["id"]; ?>" onclick="lookwd<? echo $row["id"]; ?>()"><? echo $row["id"]; ?>&nbsp;&nbsp;&nbsp;<? echo $row["eng"]; ?></td>
    </tr>
	<tr>
    	<td height="40" colspan="2" align="center" valign="middle"><? echo $row["gro"]; ?>&nbsp;<? echo $row["rec"]; ?></td>
    </tr>
    <tr>
    	<td width="50%" height="30" align="center" valign="middle" onclick="postu<? echo $row["id"]; ?>()"><img src="images/up.png" width="52" height="18" border="0" /></td>
        <td width="50%" align="center" valign="middle" onclick="postd<? echo $row["id"]; ?>()"><img src="images/down.jpg" width="52" height="18" border="0" /></td>
    </tr>
                
</table>  
</td>     


<?
if ($j%5==4)
	echo "</tr><tr>";
}
?>
</tr>

	</td>
  </tr>
</table>
<a href="Index.html">return</a>
</body>
</html>

