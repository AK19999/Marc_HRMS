<?php
//error_reporting(0);
include("connect.php");

?>
<html>
<head>
<title>Marc : Employee Login</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="css/materialize.css" type="text/css"/>
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/materialize.js"></script>
</head>

<body class="blue lighten-1">
<div class="row">
<div class="col s1" > <img src="images/logo.jpg" height="40"/></div>
<div class="col s2 blue">Notification</div>
<div class="col s9 white"><marquee onmouseover="stop()" onmouseout="start()">
<?php
$i=1;  
$res_not=mysql_query("select * from tbl_notification where status='show'");
while($row_not=mysql_fetch_array($res_not))
{ // print_r($row_not);
  $not_id=$row_not['0'];
  $type=$row_not['type'];
  $title=$row_not['title'];
  if($type=="Private")
  {
    ?>
    <a class="red-text" href="javascript:alert('Your are Regsitered Employee please login!')"><?php echo $i."-".$title; ?></a>
  <?php 
  }
  else 
  { ?>
  <a  href="notification_info.php?id=<?php echo $not_id; ?>"><?php echo $i."-".$title; ?></a>
<?php
  }
$i++; 
}
?>
</marquee></div><?php
@$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==8)
{
	echo "<br/><span class='center green-text'>Apply Successfully</span>";
}?>
</div>
<div class="row">
<div  class="col s6 offset-s3" style="background:rgba(0,0,0,0.4);">

<form action="emplogcode.php" method="post">
<h3 class="center-align white-text">Employee Login</h3>
<?php
if($msg==1)
{
	echo "<br/><span class='red-text'>invailid eamil or password</span>";
}
if($msg==2)
{
	echo "<br/><span class='cyan-text'>Logout Successfully</span>";
}
if($msg==3)
{
	echo "<br/><span class='red-text'>Pagal ho kya ? Pahle login kro !! </span>";
}
?>
        <div class="input-field col s12">
          <input id="email" type="email" class="validate white-text" name="email">
          <label for="email" class="white-text">Email</label> 
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
      <a href="index.php" class="btn black  white-text">Admin Login</a>
      </div>
      </div>

	  </form>
    </div>
    </div>
    </body>
    </html>