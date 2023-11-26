<?php
$id=$_REQUEST['id'];
include("connect.php");
$query="update tbl_employee set status='n' where emp_id='$id'";
mysql_query($query);
//echo $query;
header("location:setting.php");
?>