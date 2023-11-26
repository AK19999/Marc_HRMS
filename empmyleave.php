<?php
session_start();
$e=$_SESSION['employee'];
include("emp_menu.php");
include("connect.php");
$res_emp=mysql_query("select * from tbl_employee where email='$e'");
if($row=mysql_fetch_array($res_emp))
{
    $empid=$row['0'];
}
$res_leave=mysql_query("select * from tbl_applyleaves where empid='$empid'")
?>
<title>My Leave</title>
<div class="row"></br>
<div class="col s8 m6 offset-s2 offset-m3" style="background:rgba(0,0,0,0.5);">
<table class="white-text">
<tr>
<th>Sr.n</th>
<th>Title</th>
<th>Discription</th>
<th>Status</th>
</tr>
<?php
$i=1;
while($row_leave=mysql_fetch_array($res_leave))
{ ?>
<tr>
<td> <?php echo $i; ?></td>
<td> <?php echo $row_leave['title']; ?></td>
<td> <?php echo $row_leave['description']; ?></td>
<td> <?php echo $row_leave['status']; ?></td>
</tr>
<?php
$i++;
}
?>
</div>
</div>
