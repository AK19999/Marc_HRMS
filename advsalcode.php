<?php
$dept=$_POST['deptid'];
$emp_id=$_POST['emp_id'];
$reason=$_POST['reason'];
$advsal=$_POST['advsal'];
include("connect.php");
//echo $dept,$emp_id,$reason,$advsal;
$query="insert into tbl_advance(emp_id,dept_id,advance,date,reason) values ('$emp_id','$dept','$advsal',curdate(),'$reason')";
mysql_query($query);
header("location:advancesalary.php?msg='9'");
?>