<!--生成词库-->

<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/db.php");
	$link_id=mysql_connect($DB_HOST,$DB_USER,$DB_PWD);
	mysql_select_db("word");
	mysql_query("SET NAMES 'utf8'");
	$sql="Select * from six";	
	$result=mysql_query($sql);
		$i=0;
	$arr = array(); 
	while ($rowt=mysql_fetch_array($result))
	{
	//array_push($arr, $rowt);
	$i++;
	//echo "[".$rowt[0].",'".$rowt[1]."','".$rowt[2]."','".$rowt[3]."'],";
	echo "\"".$rowt[1]."\",";
	if($i>1643)break;
	}
	
	
	

	?>


<!--打印每组id-->
<?php /*
$s=-1;
while($s<=1287)
{
$s++;
if($s%30==0)
echo $s."];<br />wd".floor($s/30+1)."=[";
else
echo $s.",";

}


?>









<!--分页代码-->

<?php $i=1;
while($i<1288){
if($i%30==1){
$r=0;
$filename="page".floor($i/30+1).".html";
	$fp=fopen("$filename", "a+"); //打开文件指针，创建文件
	if ( !is_writable($filename) )
      die("文件:" .$filename. "不可写，请检查！");


fwrite($fp,"<!DOCTYPE html>
<html>
    <head>
        <link href=\"//Microsoft.WinJS.1.0/css/ui-light.css\" rel=\"stylesheet\" />
    <script src=\"//Microsoft.WinJS.1.0/js/base.js\"></script>
    <script src=\"//Microsoft.WinJS.1.0/js/ui.js\"></script>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
           <link href=\"css/default.css\" rel=\"stylesheet\" />
    <script src=\"js/default.js\"></script>
        <title></title>
    </head>
    <body>

         <table>
  <tr>");

}

$cont="
  <td> <table width=\"250\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" id=\"tb".$i."\">  
		<tr>
			<td height=\"70\"  align=\"center\" valign=\"middle\" id=\"wd".$i."\" onclick=\"lookwd(".$r.",".floor($i/30.0001+1).")\" ondblclick=\"looksound(".$r.",".floor($i/30.0001+1).")\"><script type=\"text/javascript\">document.write( wd[wd". floor($i/30.0001+1)."[".($r)."]" ."][1]) </script></td>
		</tr>
		<tr>
			<td height=\"40\" align=\"center\" valign=\"middle\" id=\"rec".$i."\">&nbsp;<script type=\"text/javascript\">document.write(wd[wd". floor($i/30.0001+1)."[".($r)."]" ."][3])</script></td>
		</tr>
	</table></td>";
	fwrite($fp,$cont);	
		if ($i%5==0&&$i%30!=0)
	fwrite($fp,"
	
	</tr><tr>
	
	");
	if($i%30==0)
	{$cont= " </tr>
	        <tr>
        <td align=\"center\"><a href=\"default.html\" style=\"color:rgb(87, 41, 193);font-size:25px\">return</a></td>
        <td colspan=\"3\">&nbsp;</td>
        <td align=\"center\"><button onclick=\"javascript:window.top.location.reload()\" style=\"color:rgb(87, 41, 193);font-size:22px\" >change the sequence</button></td>
</tr>
	</table>
    </body>
</html>";

 	fwrite($fp,$cont);	}
	$i++; $r++;} 
	if($i%30==0)
	fclose($fp);

 
 
 
 
 
 	?>
 
 
 
 <!--首页链接 -->
 
 <?php $j=1;
 while($j<51)
 {

 ?>
 
 	<td>
		<a href="page<?php echo $j ?>.html">wordlist<?php echo (($j-1)*30)+1 ?>~<?php echo $j*30 ?></a>
		</td>
		<?php if($j%6==0)	echo( "</tr><tr class=\"nali\">");
		$j++;
		}
		?>
		
		
		
<!--shuffle -->
<?php for($a=1;$a<=43;$a++)
echo "shuffle(wd".$a.");";

*/


?>