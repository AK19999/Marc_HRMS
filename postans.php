<?php
$quesid=$_REQUEST['qid'];
//echo $quesid;
include("emp_menu.php");
?>
<div class="row">
</br>
<div class="col s8 m6 offset-s2 offset-m3" style="background:rgba(0,0,0,0.5)">
<form class="white-text" action="ans.php" method="post">
<input type="hidden" name="quid" value="<?php echo $quesid; ?>">
Post Answer
<textarea name="ans">
</textarea>
<div class="row"></br>
<input class="btn" type="submit" value="send">
</div>
</form>
</div></div>