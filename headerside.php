<?php
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
<body class="blue lighten-3">
<nav>
    <div class="nav-wrapper blue">
      <a href="dashboard.php" class="brand-logo center">
	  <img src="images/logo.jpg" height="40" style="margin-top:10;"/>
	  </a>
	  <ul id="nav-mobile" class="right">
	  <li><a class="btn black lighten-2" href="logout.php">Logout</a></li>
	  </ul>
      <ul id="nav-mobile" class="left">
	  <li  data-activates="slide-out" class="button-collapse"><a><i class="fa fa-reorder"></i></a></li>	 
    </div>
  </nav>
  <ul id="slide-out" class="side-nav">
    <li><div class="user-view center">
        <img src="images/v.png" height="60"/>
        </div></li></br>
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="adddepartment.php">Add Department</a></li>
    <li><a href="addemployee.php">Add Employee</a></li>
	<li><a href="viewemployee.php">View Employee</a></li>
    <li><a href="salary.php">Salary</a></li>
    <li><a href="employeeleaves.php">Employee Leaves</a></li>
    <li><a href="attendence.php">Attendence</a></li>
    <li><a href="adminchangepassword.php">Change Password</a></li>
        <li><a href="access.php">Accessibility</a></li>
        <li><a class="btn red-text" href="logout.php">Logout</a></li>
  </ul>
  <script>
$(document).ready(function(){

  $('.button-collapse').sideNav({
      menuWidth: 250, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is closed
    }
  );
});
</script>