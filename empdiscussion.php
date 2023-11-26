<?php
session_start();
if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
include("emp_menu.php");
include("connect.php");
$res_ques=mysql_query("select * from tbl_question");
?>
<div class="row">
</br>
<div class="col s8 m6 offset-s2 offset-m3" style="background:rgba(0,0,0,0.6)">
<form class="white-text" action="discusscode.php" method="post">
<div class="row">
Enter question
<textarea name="ques"></textarea>
</div>
<div class="row">
<input class="btn" type="submit" value="send">
</div>
</form>
</div>
</div>

<div class="row">
<div class="col s10 m8 offset-s1 offset-m2">
<table class="white">
<tr>
<th>Sr.n</th>
<th>Question</th>
<th>Post Answer</th>
<th>View Answer</th>
</tr>
<?php 
$i=1;
while($row_ques=mysql_fetch_array($res_ques)){ 
  $quid=$row_ques['0'];
    ?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row_ques['question']; ?></td>
<td><a href="postans.php?qid=<?php echo $quid; ?>">post ans</a></td>
<td><a href="viewans.php?quid=<?php echo $quid; ?>">view ans</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
</div>