<?php
$id=$_REQUEST['id'];
include("connect.php");
$query="update tbl_shedule set selection='undone' where shd_id='$id'";
mysql_query($query);
//echo $query;
header("location:viewschedulelist.php");
?>