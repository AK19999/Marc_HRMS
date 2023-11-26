<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
include("connect.php");
$id=$_REQUEST['id'];
//password ==mode
$res_mode=mysql_query("select * from tbl_access where email='attendance'");//attendance-->accessname;
if($row=mysql_fetch_array($res_mode,MYSQL_BOTH))
{
	//print_r($row);
	$access_mode=$row['password'];//accessname--->mode
	//echo $access_mode;
}
if($access_mode=="locked")
{
	echo "<script>alert('cannot Update Attendance! Access Denied');window.location.href='attendence.php';</script>";
}
else
{ //unlocked
   
    $query="update tbl_attendence set att_status='present' where attd_id='$id'";
    mysql_query($query);
    //echo $query;
    header("location:attendence.php");
}

?>