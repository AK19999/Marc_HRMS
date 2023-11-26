<?php
session_start();
$e=$_SESSION['admin'];
echo $e;
$p=$_POST['password'];
include("connect.php");
$query_access="select * from tbl_access where email='$e' and password='$p'";
$res_access=mysql_query($query_access);
if($row_access=mysql_fetch_array($res_access,MYSQL_BOTH))
{	$access=rand(1111,9999);      
   $_SESSION['access'];
header("location:setting.php?id=$access");
}
else
{
header("location:access.php?msg=1");	
}
?>