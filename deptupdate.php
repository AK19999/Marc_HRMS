<?php
$id=$_REQUEST['id'];
//echo $id;
include("headerside.php");
include("connect.php");
$query="select * from tbl_department where dept_id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<div class="row">
<form action="deptedit.php?id=<?php echo $row['dept_id'] ?>" method="post" class="light-blue darken-2 col s4 offset-s4">

        <div class="input-field col s12">
          <input id="text" type="text" class="validate white-text" name="department" value="<?php echo $row['department']; ?>"/>
          <label for="text" class="black-text">Enter Department</label>  
      </div>
      <div class="row">
      <input class="col s4 offset-s4 btn black" type="submit" value="Update"/>
      </div>
      <?php
}
      ?>
	  </form>
    </div>