<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
$dept_id=$_REQUEST['depid'];
$emp_id=$_REQUEST['empid'];
//echo $dept_id,$emp_id;
include("connect.php");
   $count=mysql_query("select count(*) as workday from tbl_attendence where emp_id='$emp_id' and att_status='present'");
   $res_emp=mysql_query("select * from tbl_employee where emp_id='$emp_id'");
   $res_dept=mysql_query("select * from tbl_department where dept_id='$dept_id'");
 $res_sal=mysql_query("select * from tbl_salary where dept_id='$dept_id'");
if($row_count=mysql_fetch_array($count))
{
    //print_r($row_count);
 $workday=$row_count['workday'];

}
  if($row_emp=mysql_fetch_array($res_emp))
     {
    //print_r($row_emp);
   $emp_name=$row_emp['name'];
    }
  
    if($row_dept=mysql_fetch_array($res_dept))
    {
     // print_r($row_dept);
         $depart=$row_dept['department'];   
     }
    if($row_sal=mysql_fetch_array($res_sal))
    {
   //  print_r($row_sal);
   $basic=$row_sal['basic'];
    $paygrade=$row_sal['paygrade'];
     }

include("payslip.php");
?>
