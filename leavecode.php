<?php
$empid=$_REQUEST['id'];
$title=$_POST['title'];
$description=$_POST['description'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$status='pending';
//echo $title,$description,$date2,$date1;
include("connect.php");
$query="insert into tbl_applyleaves(title,description,datefrom,till,empid,date,status) values ('$title','$description','$date1','$date2','$empid',curdate(),'$status')";
mysql_query($query);
header("location:applyleave.php");
?>
