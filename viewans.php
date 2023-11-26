<?php
$id=$_REQUEST['quid'];
//echo $id;
include("emp_menu.php");
include("connect.php");
$query_ans="select * from tbl_answer where ques_id='$id'";
$res_ans=mysql_query($query_ans);
while($row_ans=mysql_fetch_array($res_ans)){
?>
<div class="row"></br>
<div class="col s8 m6 offset-s2 offset-m3" style="background:rgba(0,0,0,0.6)">
  <p class="center white-text">Ans :  <?php  echo $row_ans['answer']; ?></p>
  </div></div>
  <?php
}
?>