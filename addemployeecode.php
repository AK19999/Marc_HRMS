<?php
$n=$_POST['name'];
$fn=$_POST['fname'];
$g=$_POST['g'];
$e=$_POST['email'];
$p=$_POST['password'];
$dept=$_POST['department'];

$filename=$_FILES['file']['name'];
$type=$_FILES['file']['type'];
$size=$_FILES['file']['size'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="Employee/";
//echo "<br/>",$filename,$type,$size,$tmp_name;
$status='y';
$dob=$_POST['dob'];
$mo=$_POST['mobile'];
$ad=$_POST['address'];
//echo $n,$fn,$g,$e,$p,$dept,$dob,$mo,$ad ;

include("connect.php");
$query="insert into tbl_employee(name,fname,gender,email,password,dob,dept_id,address,mobile,pic,date,status) values ('$n','$fn','$g','$e','$p','$dob','$dept','$ad','$mo','$filename',curdate(),'$status')";
mysql_query($query);
move_uploaded_file($tmp_name,$location.$filename);
echo $query;
header("location:viewemployee.php");
?>