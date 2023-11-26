<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
$id=$_REQUEST['id'];
include("connect.php");
$query="update tbl_apply set status='waiting' where app_id='$id'";
mysql_query($query);
//echo $query;
header("location:viewappliant.php")
?>