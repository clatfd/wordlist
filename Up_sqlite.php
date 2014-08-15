<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<?php
$db = "test.db";
$conn = sqlite_open($db) or die ("ERROR: Cannot open database");
$sql="UPDATE ".$_GET['list']." SET gro=gro+1 WHERE id =".$_GET['id'];
$result = sqlite_query($conn, $sql) or die("Error in query execution: " . sqlite_error_string(sqlite_last_error($conn)));
sqlite_close($conn);

?>

</body>
</html>
