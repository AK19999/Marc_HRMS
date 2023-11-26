<?php
$id=$_REQUEST['id'];
include("connect.php");
$query="update tbl_notification set status='show' where not_id='$id'";
mysql_query($query);
//echo $query;
header("location:addnotification.php");
?>