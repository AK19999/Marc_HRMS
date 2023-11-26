<?php
session_start();
$e=$_POST['email'];
$p=$_POST['password'];
echo $e,$p;
include("connect.php");
$query="select * from tbl_employee where email='$e' and password='$p' and status='y'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{	
$_SESSION['employee']=$e;
header("location:empprofile.php");
}
else
{
header("location:employeelogin.php?msg=1");	
}
?>