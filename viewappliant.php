<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
include("headerside.php");
include("connect.php");
$res_aply=mysql_query("select * from tbl_apply");
?>
<div class="row"></br>
<div class="col s10 offset-s1" style="background:rgba(0,0,0,0.5);">
<table class="responsive-table white-text">
<thead class="white-text">
<tr>
<th>Sr. n</th>
<th>Name</th>
<th>Email</th>
<th>Gender</th>
<th>Mobile</th>
<th>Resume</th>
<th>Delete</th>
<th>Status</th>
<th>Shedule</th>
<tr>
</thead>
<tbody>
<?php 
$i=1;
while($row_aply=mysql_fetch_array($res_aply)){
	$aplyid=$row_aply['0'];
	$status=$row_aply['status'];
   ?> 
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row_aply['name'] ?></td>
<td><?php echo $row_aply['email'] ?></td>
<td><?php echo $row_aply['gender'] ?></td>
<td><?php echo $row_aply['mobile'] ?></td>
<td><a href="Reasume/<?php echo $row_aply['filename'];?>" target="_blank">Resume</a></td>
<td><a class="red-text" href="applydelete.php?id=<?php echo $aplyid ; ?>">Delete</a></td>
<td> <?php if($status=='waiting'){?><a href="aply_conferm.php?id=<?php echo $aplyid ; ?>" target="blank"> <?php } else { ?><a href="aply_waiting.php?id=<?php echo $aplyid ; ?>"><?php } echo $status; ?></a> </td>
<td><?php if($status=='waiting'){} else { ?><a href="shedule.php?id=<?php echo $aplyid; ?>">Shedule</a> <?php } ?></td>
</tr>
<?php
$i++;
} ?>
</tbody>
</table>
<br><br>
</div>
</div>