<?php
$id=$_REQUEST['id'];
include("connect.php");
$query="delete from tbl_department where dept_id='$id'";
mysql_query($query);
header ("location:adddepartment.php");
?>