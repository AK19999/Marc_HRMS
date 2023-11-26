<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
include("headerside.php");
?>
<style>
.imargin{
	margin-left:-20;
	margin-top:-8;
}
.cmargin{
height:130;
margin-right:30;
}
</style>
<title>Dashboard</title>
  <div class="col s6 m12">
	  <div class="row">
	  <div class="col s12 m12 green">
	 <!-- <h4 class="white-text"> File Tracking System </h4>-->
	  </div>
	  </div>
	  <hr class="z-depth-2 black" style="height:2px;"/>
	  <div class="row"></br>
    <div class="col s10 m10 offset-s1 offset-m1 blue lighten-4">
<div class="col s12 m2 card blue cmargin" style="border-radius:20px;">
<a href="adddepartment.php" class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-plus"></i>
</a></br>
<a href="adddepartment.php" class="center">
<p class="white-text"><b>Add Department</b></p>
</a>
</div>
<div class="col s12 m2 card purple cmargin" style="border-radius:20px;">
<a class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-user-plus"></i></a>
</br>
<a href="addemployee.php" class="center">
<p class="white-text"><b>Add Employee</b></p>
</a>
</div>
<div class="col s12 m2 card green cmargin" style="border-radius:20px;">
<a href="viewemployee.php" class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-reorder"></i></a>
<a href="viewemployee.php" class="center">
<p class="white-text center"><b>View Employee</b></p>
</a>
</div>
<div class="col s12 m2 card pink lighten-2 cmargin" style="border-radius:20px;">
<a href="salary.php" class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-inr"></i></a></br>
<a href="salary.php" class="center">
<p class="white-text"><b>Salary</b></p>
</a>
</div>
<div class="col s12 m2 card orange cmargin" style="border-radius:20px;">
<a href="viewattendance.php" class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-eye blue"></i></a></br>
<a href="viewattendance.php" class="center">
<p class="white-text"><b>View Attendance</b></p>
</a>
</div>
<div class="col s12 m2 card pink cmargin" style="border-radius:20px;">
<a href="employeeleaves.php" class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-street-view"></i></a></br>
<a href="employeeleaves.php" class="center">
<p class="white-text"><b>Employee Leaves</b></p>
</a>

</div>
<div class="col s12 m2 card amber darken-2 cmargin" style="border-radius:20px;">
<a href="attendence.php" class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-pencil-square-o"></i></a></br>
<a href="attendence.php" class="center">
<p class="white-text"><b>Attendance</b></p>
</a>

</div>
<div class="col s12 m2 card orange lighten-2 cmargin" style="border-radius:20px;">
<a href="addnotification.php" class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-bell"></i></a></br>
<a href="addnotification.php" class="center">
<p class="white-text"><b>Add Notification</b></p>
</a>
</div>
<div class="col s12 m2 card pink cmargin" style="border-radius:20px;">
<a  href="viewappliant.php" class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-eye"></i></a></br>
<a href="viewappliant.php" class="center">
<p class="white-text"><b>View Applicant</b></p>
</a>
</div>

</div>
</div></div>
    </div>

	
<script>
$(document).ready(function(){
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is closed
    }
  );
});


    </script>
 </body>
 <html>