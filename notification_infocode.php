<?php
$n=$_POST['name'];
$g=$_POST['g'];
$e=$_POST['email'];
$p=$_POST['password'];
$skill=$_POST['skill'];
$filename=$_FILES['file']['name'];
$type=$_FILES['file']['type'];
$size=$_FILES['file']['size'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="Resume/";
//echo "<br/>",$filename,$type,$size,$tmp_name;
$dob=$_POST['dob'];
$mo=$_POST['mobile'];
$status='waiting';
//echo $n,$g,$e,$p,$dob,$mo;
include("connect.php");
$query="insert into tbl_apply(name,email,mobile,gender,dob,filename,skill,status,date) values ('$n','$e','$mo','$g','$dob','$filename','$skill','$status',curdate())";
mysql_query($query);
move_uploaded_file($tmp_name,$location.$filename);
echo $query;
header("location:employeelogin.php?msg=8");
?>