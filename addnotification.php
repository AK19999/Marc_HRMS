<?php
include("headerside.php");
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
?>
<title>Add Notification</title>
<div class="row"><br>
      <div class="col s8 m6 offset-s2 offset-m3" style="background:rgba(0,0,0,0.5)">
<form action="notificationcode.php" method="post" class="white-text">
<br>
<div class="input-field col s12">
                  <select name="type">
      <option value="">Choose your option</option>
      <option value="Private">Private</option>
      <option value="Public">Public</option>
         </select>
    <label class="white-text">Type</label>
  </div>
<div class="row">
        <div class="input-field col s12">
          <input id="title" type="text" class="validate" name="title">
          <label class="white-text" for="title">Title</label>
        </div>
              </div>
              
      <div class="row">
        <div class="input-field col s12">
        <label class="white-text" for="title">Discription</label></br>
       <textarea name="discription"></textarea>
        </div></div>
        <div class="row" > 
      <input class="col s4 offset-s4 btn black" type="submit" value="Add Notification"/><br/>
      </div>
</form>
</div></div>
<div class="row">
<div class="col s10 m8 offset-s1 offset-m2 blue">
<?php 
include("connect.php");
$res_ad_not=mysql_query("select * from tbl_notification");
?>
<table class="white-text">
<tr>
<th>Sr.n</th>
<th>Title</th>
<th>Discriptino</th>
<th>Type</th>
<th>Status</th>
</tr>
<?php 
$i=1;
while($row=mysql_fetch_array($res_ad_not))
{ $not_id=$row['not_id'];
  $status=$row['status'];
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['discription']; ?></td>
<td><?php echo $row['type']; ?></td>
<td><?php if($status=='hide'){ ?><a class="white-text" href="show_not.php?id=<?php echo $not_id; ?>"><?php echo $status; } else {
  ?><a class="white-text" href="hide_not.php?id=<?php echo $not_id; ?>"> <?php echo $status; } ?> </a></td>
</tr>
<?php
$i++;
}
?>
</table>
</div></div>

<script>

$(document).ready(function() {
    $('select').material_select();
  });
</script>