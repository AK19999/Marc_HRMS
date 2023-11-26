<?php
session_start();
$e=$_SESSION['employee'];
$res_emp=mysql_query("select * from tbl_employee where email='$e'");
if($row_emp=mysql_ffetch_array($res_emp))
{
    $emp_id=$row_emp['0'];
}
$res_adv=mysql_query("select * from tbl_advance where emp_id='$emp_id'")
?>