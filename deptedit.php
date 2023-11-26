<?php
$id=$_REQUEST['id'];
$dept=$_POST['department'];
echo $id,$dept;
include("connect.php");
$query="update tbl_department set department='$dept' where dept_id='$id'";
mysql_query($query);
header("location:adddepartment.php");
?>