<?php
$id=$_REQUEST['id'];
include("connect.php");
$query="update tbl_shedule set selection='done' where shd_id='$id'";
mysql_query($query);
//echo $query;
header("location:viewschedulelist.php");
?>