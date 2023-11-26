<?php
$dep_id=$_POST['department'];
$paygrade=$_POST['paygrade'];
$basic=$paygrade*30;
//echo $basic,$dep_id,$paygrade;

include("connect.php");
$query_slry="insert into tbl_salary(dept_id,paygrade,basic) values ('$dep_id','$paygrade','$basic')";
mysql_query($query_slry);
header("location:viewsalary.php");
?>