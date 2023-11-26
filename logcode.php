<?php
session_start();
$e=$_POST['email'];
$p=$_POST['password'];
//echo $e,$p;
include("connect.php");
$query="select * from tbl_admin where username='$e' and password='$p'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{	
$_SESSION['admin']=$e;
header("location:dashboard.php");
}
else
{
header("location:index.php?msg=1");	
}
?>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-info">logout</button>
    </div>
  </div>