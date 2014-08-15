<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>wordlist</title>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript" src="jquery-1.8.2.js"></script>
<script type="text/javascript" src="js_sqlite.js"></script>

</head>



<body>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    
	<?php
	$db = "HJUserDB.db";
	$conn = sqlite_open($db) or die ("ERROR: Cannot open database");

	$sql = "SELECT * FROM *";
	$result = sqlite_query($conn, $sql) or die("Error in query execution: " . sqlite_error_string(sqlite_last_error($conn)));
	
	$i=0;
	$arr = array(); 
	while($rowt = sqlite_fetch_array($result))
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
			<td height="70" colspan="2" align="center" valign="middle" id="wd<?php echo $row["id"]; ?>" onclick="lookwd(<?php echo $row["id"]; ?>,'<?php echo $row["chi"]; ?>','<?php echo $row["eng"]; ?>')"><?php echo $row["id"]; ?>&nbsp;&nbsp;&nbsp;<?php echo $row["eng"]; ?></td>
		</tr>
		<tr>
			<td height="40" colspan="2" align="center" valign="middle"><?php echo $row["gro"]; ?>&nbsp;<?php echo $row["rec"]; ?></td>
		</tr>
		<tr id="bt<?php echo $row["id"]; ?>">
			<td width="50%" height="30" align="center" valign="middle" onclick="postu(<?php echo $row["id"]; ?>,'<?php echo $_GET["list"] ?>')"><img src="images/up.png" width="52" height="18" border="0" /></td>
			<td width="50%" align="center" valign="middle" onclick="postd(<?php echo $row["id"]; ?>,'<?php echo $_GET['list'] ?>')"><img src="images/down.jpg" width="52" height="18" border="0" /></td>
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

<p>
  total number:<?php echo $j+1; ?>
</p>
<button id="undo" style="opacity: 0.01;" onclick="undo('<?php echo $_GET['list'] ?>')">undo</button>
<br/>
<a class="menu" href="default_sqlite.php?list=<?php echo $_GET['list'] ?>&gro=<?php echo $_GET['gro']+1 ?>&idlo=<?php echo $_GET['idlo'] ?>&idup=<?php echo $_GET['idup'] ?>">next_group </a>
<br/>
<a class="menu" href="default_sqlite.php?list=<?php echo $_GET['list'] ?>&gro=<?php echo $_GET["gro"]-1 ?>&idlo=<?php echo $_GET['idlo'] ?>&idup=<?php echo $_GET['idup'] ?>">last_group </a>
<br/>
<a class="menu" href="Index.html">return</a>
</body>
</html>

