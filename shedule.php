<?php
$id=$_REQUEST['id'];
//echo $id;
include("headerside.php");
include("connect.php");
$res_aply=mysql_query("select * from tbl_apply where app_id='$id'");
if($row_aply=mysql_fetch_array($res_aply))
{ $name=$row_aply['name'];
$email=$row_aply['email'];
$mobile=$row_aply['mobile'];
$appid=$row_aply['0'];
}
?>
<div class="row"><br>
<div class="col s8 m6 offset-s2 offset-m3 " style="background:rgba(0,0,0,0.5);">
<form action="shedulecode.php?id=<?php echo $appid; ?>" method="post">
<div class="input-field col s12">
          <input id="name" type="text" class="validate white-text" readonly="true" value="<?php echo $name; ?>" name="name">
          <label for="name"class="white-text">Name</label>
        </div>
        <div class="input-field col s12">
          <input id="email" type="email" class="validate white-text" readonly="true" value="<?php echo $email; ?>" name="email">
          <label for="email" class="white-text">Email</label>
      </div> 
      <div class="input-field col s12">
          <input id="mobile" type="text" class="validate white-text" readonly="true" value="<?php echo $mobile; ?>" name="mobile">
          <label for="mobile"class="white-text">Mobile</label>
        </div>
        <div class="input-field col s12">
        <label for="mobile"class="white-text">Venue</label><br>
         <textarea class="white-text" name="venue" value=""></textarea>
        </div>
        <div class="input-field col s5">
        <label for="date"class="white-text">Date</label><br>
          <input id="date" type="date" class="validate white-text" name="date">
        </div>
        <div class="input-field col s5 offset-s2">
        <label for="time"class="white-text">Time</label><br>
          <input id="time" type="time" class="validate white-text" name="time">
        </div>
        <div class="row" > 
      <input class="col s4 offset-s4 btn black" type="submit" value="SHEDULE"/>
      </div>
</form>
</div>
</div>