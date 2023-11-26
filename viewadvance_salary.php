<?php 
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
include("headerside.php");
include("connect.php");
$res_adv=mysql_query("select sum(advance) as adv,emp_id,dept_id from tbl_advance group by emp_id");
?> 
<div class="row"><br>
<div class="col s8 m6 offset-s2 offset-m3" style="background:rgba(0,0,0,0.5);">
<table class="white-text">
<tr>
<th>Sr.n</th>
<th>Employee Name</th>
<th>Department</th>
<th>Advance Salary</th>
</tr>
<?php 
$i=1;
while($row_adv=mysql_fetch_array($res_adv))
{ $emp_id=$row_adv['emp_id'];
    $dept_id=$row_adv['dept_id'];
    ?>
<tr>
<td><?php echo $i; ?></td>
<td><?php
if($row_emp=mysql_fetch_array(mysql_query("select name from tbl_employee where emp_id='$emp_id'"))){
echo $row_emp['name']; } ?></td>
<td>
<?php 
if($row_dept=mysql_fetch_array(mysql_query("select department from tbl_department where dept_id='$dept_id'")))
echo $row_dept['department']; ?></td>
<td><?php echo $row_adv['adv']; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</div></div>