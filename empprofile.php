<?php
include("emp_menu.php");
session_start();
$e=$_SESSION['employee'];
if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:employeelogin.php?msg=3");
}
include("connect.php");
$queryemp="select * from tbl_employee where email='$e'";
$resemp=mysql_query($queryemp);
?>
<title>My Profile</title>
<div class="row"><div class="col s8 m4 offset-s2 offset-m4">
</br>
<table class="white-text" style="background:rgba(0,0,0,0.6)">
<?php
if($rowemp=mysql_fetch_array($resemp,MYSQL_BOTH))
{
	?>
<tr> <td></td>
<td><img class="center" src="Employee/<?php echo $rowemp['pic']; ?>" height="100"/></td>
</tr>
<tr>
<td> Name</td>
<td>: <?php echo $rowemp['name'] ;?> </td>
</tr>
<tr>
<td> F'Name</td>
<td>: <?php echo $rowemp['fname'] ;?> </td>
</tr>
<tr>
<td> Gender</td>
<td>: <?php echo $rowemp['gender'] ;?> </td>
</tr>
<tr>
<td> Email</td>
<td>: <?php echo $rowemp['email'] ;?> </td>
</tr>
<td> DOB</td>
<td>: <?php echo $rowemp['dob'] ;?> </td>
</tr>
<td> Department</td>
<td>:  <?php  $depart=$rowemp['dept_id']; 
$query="select department from tbl_department where dept_id='$depart'";
$redep=mysql_query($query);
if($rodep=mysql_fetch_array($redep,MYSQL_BOTH))
{
echo $rodep['0']; } ?>
</td>
</tr>
</tr>
<td> Address</td>
<td>: <?php echo $rowemp['address'] ;?> </td>
</tr>
</tr>
<td> Mobile</td>
<td>: <?php echo $rowemp['mobile'] ;?> </td>
</tr>
	<?php
}
?>
</table>
</div></div>
</body>
</html>