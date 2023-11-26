<?php 
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
include("headerside.php");
include("connect.php");
$query_slry="select * from tbl_salary";
$res_slry=mysql_query($query_slry);
?> 
<title>View Salary</title>
<div class="row center-align"></br>
<div class="col s8 m6 offset-s2 offset-m3" style="background:rgba(0,0,0,0.6);">
<div class="nav-content">
<ul class="tabs tabs-transparent">
  <li class="btn-flat tab"><a class="white-text" href="#test1"></a></li>
  <li class="btn red tab"><a class="white-text" href="#test2">Paygrade</a></li>
  <li class="btn green tab"><a class="white-text" href="#test3">Basic</a></li>
  <li class="btn amber tab"><a class="white-text" href="#test4">Bulk</a></li>
</ul>
</div>
  <div id="test1" class="col s12 white-text">
  </br>
 <span> Please Select <span>
  </div>
  
  <!--Paygrade Salary -->
  <div id="test2" class="col s12 ">
  <table class="white-text">
  <thead>
<tr>
<th>Sr. no</th>
<th>Department</th>
<th>Paygrade</th>
  </tr>
  </thead>
  <tbody>
   <?php 
  $i=1;
  while($row_slry=mysql_fetch_array($res_slry))
  { 
      echo mysql_error();
   $dept_id=$row_slry['dept_id'];
      ?>
  <tr>
  <td><?php echo $i; ?></td>
      <td>
      <?php 
      $query_dept="select * from tbl_department where dept_id=$dept_id";
      $res_dept=mysql_query($query_dept);
      if($row_dept=mysql_fetch_array($res_dept))
      {
      echo $row_dept['department'];  
      }   
      ?></td>
<td><?php echo $row_slry['paygrade']; ?><td>
</tr>
  <?php
  $i++;
   }
   ?>
  </tbody>
  </table>
  </div>
  <!--Basic Salary -->
  <div id="test3" class="col s12">
  <table class="white-text">
  <thead>
<tr>
<th>Sr. no</th>
<th>Department</th>
<th>Basic</th>
  </tr>
  </thead>

  <tbody>
   <?php 
   include("connect.php");
   $query_slry="select * from tbl_salary";
   $res_slry=mysql_query($query_slry);
  $i=1;
  while($row_slry=mysql_fetch_array($res_slry))
  { 
      echo mysql_error();
   $dept_id=$row_slry['dept_id'];
      ?>
  <tr>
  <td><?php echo $i; ?></td>
      <td>
      <?php 
      $query_dept="select * from tbl_department where dept_id=$dept_id";
      $res_dept=mysql_query($query_dept);
      if($row_dept=mysql_fetch_array($res_dept))
      {
      echo $row_dept['department'];  
      }   
      ?></td>
<td><?php echo $row_slry['basic']; ?><td>
</tr>
  <?php
  $i++;
   }
   ?>
  </tbody>
  </table>
  </div>
  
  <!--Bulk Salary -->
  <div id="test4" class="col s12 white-text">
  <table class="white-text">
  <thead>
  <tr>
  <th>Sr. n</th>
  <th>Employee Name</th>
  <th>Department</th>
  <th>Basic</th>
  <th>Calculate</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include("connect.php");
  
  $query_slry="select * from tbl_salary";
   $res_slry=mysql_query($query_slry);
  $i=1;
  while($row_slry=mysql_fetch_array($res_slry))
  { 
      echo mysql_error();
   $dept_id=$row_slry['dept_id'];
      ?>
  <tr>
  
    <?php
  $query_emp="select * from tbl_employee where dept_id='$dept_id'";
  $res_emp=mysql_query($query_emp);
  while($row_emp=mysql_fetch_array($res_emp))
  { $empid=$row_emp['0'];
    $dept_id=$row_emp['dept_id'];
    $res_adv=mysql_query("select sum(advance) as adv from tbl_advance where emp_id='$empid';");
    if($row_adv=mysql_fetch_array($res_adv))
    { $adv=$row_adv['adv']; }
        ?><td><?php echo $i; ?></td>
     <td> <?php echo $row_emp['name']; ?></td>
     <td>
      <?php 
            $query_dept="select * from tbl_department where dept_id='$dept_id'";
      $res_dept=mysql_query($query_dept);
      while($row_dept=mysql_fetch_array($res_dept))
      {
      echo $row_dept['department'];  
      }   
      ?></td>
<td><?php echo $row_slry['basic']; ?><td>
<td><a href="calculate_salary.php?depid=<?php echo $dept_id; ?>&empid=<?php echo $empid; ?>&adv=<?php echo $adv; ?>"><i class="fa fa-inr" style="font-size:40px; margin-left:-60px;"></i></a></td>
</tr>
  <?php
    $i++; }
   }
   ?>
         </tbody>
    </table>
    </div>
</div>
</div>