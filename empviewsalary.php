<?php
include("connect.php");
include("emp_menu.php");
session_start();
$e=$_SESSION['employee'];
  if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:employeelogin.php?msg=3");
}
?>
<title>My Salary</title>
<div class="row"><br>
<div id="test4" class="col s10 offset-s1 white-text" style="background:rgba(0,0,0,0.5);">
  <table class="white-text">
  <thead>
  <tr>
  <th>Sr. n</th>
  <th>Employee Name</th>
  <th>Paygrade</th>
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
  if($row_slry=mysql_fetch_array($res_slry))
  { 
      echo mysql_error();
   $dept_id=$row_slry['dept_id'];
      ?>
  <tr>
      <?php
  $query_emp="select * from tbl_employee where email='$e'";
  $res_emp=mysql_query($query_emp);
  if($row_emp=mysql_fetch_array($res_emp))
  { $empid=$row_emp['0'];
    
    $res_adv=mysql_query("select sum(advance) as adv from tbl_advance where emp_id='$empid';");
    if($row_adv=mysql_fetch_array($res_adv))
    { $adv=$row_adv['adv']; }
    $dept_id=$row_emp['dept_id']; ?>
    <td><?php echo $i; ?></td>
     <td> <?php echo $row_emp['name']; ?></td>
     <td><?php echo $row_slry['paygrade']; ?></td>
<td><?php echo $row_slry['basic']; ?><td>
<td><a href="emp_calculate_salary.php?depid=<?php echo $dept_id; ?>&empid=<?php echo $empid; ?>&adv=<?php echo $adv; ?>"><i class="fa fa-inr" style="font-size:40px; margin-left:-150px;"></i></a></td>
</tr>
  <?php
    $i++; }
   }
   ?>
         </tbody>
    </table>
</div>
</div>