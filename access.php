<?php
error_reporting(0);
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
$e=$_SESSION['admin'];
echo $_SESSION['access'];
include("headerside.php");
?>
<html>
 <head>
<title>Marc</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="css/materialize.css" type="text/css"/>
<link rel="stylesheet" href="css/font-awesome.css">
<link href="css/icon.css" rel="stylesheet"/>
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/materialize.js"></script>
</head>
<body class="blue">
<div class="row">
<div class="col s4 m6 offset-s4 offset-m3">
</br>
<form action="accesscode.php" method="post" class="light-blue darken-2 col s12 white-text">
<?php
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
	echo "<br/><b><span class='center red-text'>Invailid Password</b></span></br>";
}
if($msg==2)
{
	echo "<br/><span class='center cyan-text'>Logout Successfully</span></br>";
}
if($msg==3)
{
	echo "<br/><span class='center red-text'>Pagal ho kya ? Pahle login kro !! </span></br>";
}
?>
<div class="row">
<div class="center"><?php echo $e; ?></div>
<label class="white-text">Enter Password</label>
<input type="password" name="password"/>
</div>
<div class="row" > 
      <input class="col s6 offset-s3 btn black" type="submit"/>
	  </div>
</form>
</div>
</div>
</body>
</html>