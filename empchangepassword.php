<?php
session_start();
$e=$_SESSION['employee'];
  if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:employeelogin.php?msg=3");
}
@$msg=$_REQUEST['msg'];
//echo $msg;
include("emp_menu.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="css/materialize.css" type="text/css"/>
<link rel="stylesheet" href="css/font-awesome.css">
<link href="css/icon.css" rel="stylesheet"/>
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/materialize.js"></script>
</head>
<body>
<div class="row"><br>
<form action="empchangepasscode.php" method="post" class="light-blue darken-2 col s4 offset-s4 white-text">
<?php
if($msg==4)
{
	echo "Password No Change";
}
if($msg==5)
{
	echo "Password Change Successfully";
}
if($msg==6)
{
	echo "Wrong Old Password";
}
?>
Old Password
<input type="text" name="op"/><br/>
New Password
<input type="text" name="np"/><br/>
Conferm New Password
<input type="text" name="cnp"/><br/>
      <div class="row" > 
      <input class="col s6 offset-s3 btn black" type="submit" value="Change Password"/>
	  </div>
</form>
</div>
</body>
</html>