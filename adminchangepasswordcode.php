<?php
session_start();
$e=$_SESSION['admin'];
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
//echo $op,$np,$cnp,$e."<br/>";
include("connect.php");
$query="select password from tbl_admin where username='$e'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res))
{
	$pp=$row['password'];
	//echo $pp;
}
if($op==$pp)
{
if($op==$np)
{
	 echo "No change";
header("location:adminchangepassword.php?msg=4");
}
else if($np==$cnp)
{
	echo "password change successfully";
	$query2="update tbl_employee set password='$np' where email='$e'";
	mysql_query($query2);
	session_destroy();
	header("location:index.php?msg=5");
}
}
else
{
	//echo "wrong old password";
	header("location:adminchangepassword.php?msg=6");
}
?>