<?php 
error_reporting(0);

?>
<html>
<head>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="css/materialize.css" type="text/css"/>
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/materialize.js"></script>
<title>Marc : Admin Login</title>
</head>
<body class="blue lighten-2">
	  <img src="images/logo.jpg" height="40" style="margin:10;"/>
	
<div class="row">
<form action="logcode.php" method="post" class="col s5 offset-s3 m6 offset-m3" style="background:rgba(0,0,0,0.4)">

<h1 class="white-text center-align">Admin Login</h1>
<?php 
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
	echo "<br/><span class='center red-text'>invailid eamil or password</span>";
}
if($msg==2)
{
	echo "<br/><span class='center cyan-text'>Logout Successfully</span>";
}
if($msg==3)
{
	echo "<br/><span class='center red-text'>Pagal ho kya ? Pahle login kro !! </span>";
}
?>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate white-text" name="email">
          <label for="email" class="white-text">Email</label>
       </div> 
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate white-text" name="password">
          <label for="password"class="white-text">Password</label>
        </div>
      </div>
      <p>
      <input type="checkbox" class="filled-in" id="filled-in-box" />
      <label for="filled-in-box">Remember me</label>
    </p>
      <div class="row" > 
      <input class="col s4 offset-s4 btn black" type="submit" value="Login"/><br/>
      </div>

      <div class="row" > 
      <div class="">
      <a href="employeelogin.php" class="btn black  white-text">Employee Login</a>
      </div>
      </div>
	  </form>
    </div>
    <div class="row center">
    <div class="col s10 m8 offset-s1 offset-m2 black white-text">
    <a href="team.php">Team</a>
    <span>Copyright &copy 2019 Marc : HRMS | Design by Vikash Gupta</span>
    </div></div>
</body>
</html>