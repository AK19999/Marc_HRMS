<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
@$msg=$_REQUEST['msg'];
//echo $msg;
include("headerside.php");
?>
<title>Change Password</title>
<div class="row"></br>
<form action="adminchangepasswordcode.php" method="post" class="light-blue darken-2 col s4 offset-s4 white-text">
<?php
if($msg==4)
{
	echo "Password No Change </br>";
}
if($msg==5)
{
	echo "Password Change Successfully </br>";
}
if($msg==6)
{
	echo "Wrong Old Password </br>";
}
?>
Old Password
<input type="password" name="op"/><br/>
New Password
<input type="password" name="np"/><br/>
Conferm New Password
<input type="password" name="cnp"/><br/>
      <div class="row" > 
      <input class="col s6 offset-s3 btn black" type="submit" value="Change Password"/>
	  </div>
</form>
</div>
</body>
</html>