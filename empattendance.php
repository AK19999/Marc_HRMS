<?php
session_start();
@$e=$_SESSION['employee'];
if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:employeelogin.php?msg=3");
}

include("emp_menu.php");
include("connect.php");
$res_emp=mysql_query("select * from tbl_employee where email='$e'");
if($row=mysql_fetch_array($res_emp))
{
$emp_id=$row['0'];
}
@$res_attd=mysql_query("select * from tbl_attendence where emp_id='$emp_id'");
?>
<div class="row">
</br>
<div class="col s8 m6 offset-s2 offset-m3" style="background:rgba(0,0,0,0.6)">
<table class="white-text">
<tr>
<th>Sr.n</th>
<th>Date</th>
<th>Status</th>
</tr>
<?php
$i=1;
while($row_attd=mysql_fetch_array($res_attd))
{ ?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row_attd['date']; ?></td>
<td><?php echo $row_attd['att_status']; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</div></div>