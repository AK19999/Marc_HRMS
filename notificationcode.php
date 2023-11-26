<?php
include("includes/timeconfig.php");
$title=$_POST['title'];
$type=$_POST['type'];
$discription=$_POST['discription'];
echo $title,$discription,$type;
echo $date=$set_date;
$status='hide';

include("connect.php");
$query=mysql_query("insert into tbl_notification(title,type,discription,status,date) values ('$title','$type','$discription','$status','$date')");
header("location:addnotification.php");
?>