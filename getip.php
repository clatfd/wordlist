<?php
//header("content-type:text/html; charset=GBK");
exec("ipconfig/all",$arrr);
//print_r($arrr);
$strdata=implode($arrr);
//echo $strdata;
$posistart=stripos($strdata,"IPv4");
$posiend=stripos($strdata,"Subnet Mask");
$realip=substr($strdata,$posistart,$posiend-$posistart);
$posistart2=stripos($realip,":");
$posiend2=stripos($realip,"(");
if($posistart&&$posistart2&&$posiend&&$posiend2)
{
	$ipaddress = substr($realip,$posistart2+1,$posiend2-$posistart2-1);
}
else 
{
	$ipaddress = "No Internet!";
}
//$data=substr($arrr[26],38);
//echo rtrim($data,"(首选)");
//echo substr($data,0,strlen($data)-6 )
?>
