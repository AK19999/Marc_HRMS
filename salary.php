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
<title>Salary</title>
<div class="row"><br>
<div class="col s10 m8 offset-s1 offset-m2 blue lighten-4">
<div class="col s12 m2 card blue lighten-1 cmargin">
<a href="addsalary.php" class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-plus"></i>
</a></br>
<a href="addsalary.php" class="center">
<p class="white-text"><b>Add Salary</b></p>
</a>
</div>
<div class="row">
<div class="col s12 m2 card green cmargin">
<a href="viewsalary.php" class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-rupee"></i>
</a></br>
<a href="viewsalary.php" class="center">
<p class="white-text"><b>View Salary </b></p>
</a>
</div>
<div class="row">
<div class="col s12 m2 card amber cmargin">
<a href="advancesalary.php" class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-plus"></i>
</a></br>
<a href="advancesalary.php" class="center">
<p class="white-text"><b>Add Advance Salary</b></p>
</a>
</div>
<div class="row">
<div class="col s12 m2 card green cmargin">
<a href="viewadvance_salary.php" class="btn-floating waves-effect waves-light black imargin">
<i class="fa fa-rupee"></i>
</a></br>
<a href="viewadvance_salary.php" class="center">
<p class="white-text"><b>View Advance Salary </b></p>
</a>
</div>
</div>