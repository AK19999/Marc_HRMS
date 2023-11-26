<?php
$id=$_REQUEST['id'];
//echo $id;
include("connect.php");
$query="delete from tbl_employee where emp_id='$id'";
mysql_query($query);
header("location:viewemployee.php");
?>