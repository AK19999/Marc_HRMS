<?php
include("connect.php");
session_start();
$email=$_SESSION['employee'];
$ques=$_POST['ques'];
echo $ques;
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res))
{
    $emp_id=$row['0'];
}
$query3=mysql_query("insert into tbl_question(question,emp_id,date) values ('$ques','$emp_id',curdate())");
header("location:empdiscussion.php");
?>