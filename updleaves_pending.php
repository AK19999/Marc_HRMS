<?php
$id=$_REQUEST['id'];
include("connect.php");
$query="update tbl_applyleaves set status='pending' where levave_id='$id'";
mysql_query($query);
echo $query;
header("location:employeeleaves.php")
?>