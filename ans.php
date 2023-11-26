<?php
session_start();
include("connect.php");
$ans=$_POST['ans'];
echo $ans;
$quid=$_POST['quid'];
echo $quid;
$email=$_SESSION['employee'];
echo $email;
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
  echo  $emp_id=$row['0'];
}
//answ_tbl="insert into tbl_answer (ques_id,emp_id,answer,date) values ('$quid','$emp_id',$ans')";
$query2="insert into tbl_answer(ques_id,emp_id,answer,date) values ('$quid','$emp_id','$ans',curdate())";
mysql_query($query2);
echo mysql_error();
header("location:empdiscussion.php");
?>

<title>Answer</title>