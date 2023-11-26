<?php
$emp_id=$_REQUEST['id'];
$n=$_POST['name'];
$fn=$_POST['fname'];
$g=$_POST['g'];
$e=$_POST['email'];
$dob=$_POST['dob'];
$mo=$_POST['mobile'];
$ad=$_POST['address'];
//echo $n,$fn,$g,$e,$p,$dept,$dob,$mo,$ad ;
include("connect.php");
$query="update tbl_employee set name='$n',fname='$fn',gender='$g',email='$e',dob='$dob',mobile='$mo',address='$ad',date=curdate() where emp_id='$emp_id'";
mysql_query($query);
echo $query;
header("location:empprofile.php");
?>