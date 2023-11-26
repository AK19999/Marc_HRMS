<?php
session_start();
if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
$e=$_SESSION['employee'];
//echo $e;
include("emp_menu.php");
include("connect.php");
$res_emp=mysql_query("select * from tbl_employee where email='$e'");
if($rowemp=mysql_fetch_array($res_emp)) 
{ $emp_id=$rowemp['emp_id'];
?>
<title>UPDATE PROFILE</title>
  <div class="row"></br>
<form action="editempprofile.php?id=<?php echo $emp_id; ?>" method="post" class="light-blue darken-2 col s4 m6 offset-m3" enctype="multipart/form-data">

<h3 class="center-align white-text">UPDATE PROFILE</h3>
        <div class="input-field col s12">
          <input id="name" type="text" class="validate white-text" value="<?php echo $rowemp['name'] ;?>" name="name">
          <label for="name"class="white-text">Name</label>
        </div>
        <div class="input-field col s12">
          <input id="fname" type="text" class="validate white-text" value="<?php echo $rowemp['fname'] ;?>" name="fname">
           <label for="fname"class="white-text">F'Name</label>
        </div>
        <label class="white-text" for="test1">Gender</label>
        <p class="white-text">
      <input name="g" type="radio" id="test1" value="male" <?php if($rowemp['gender']=='male') { ?> checked <?php } ?>"/>
      <label class="white-text" for="test1">Male</label>
      <input name="g" type="radio" id="test2" value="female" <?php if($rowemp['gender']=='female'){?> checked <?php } ?>/>
      <label class="white-text" for="test2">Female</label>
      <input name="g" type="radio" id="test3" value="other" <?php if($rowemp['gender']=='other'){?> checked <?php } ?>/>
      <label class="white-text" for="test3">Other</label>
    </p>
    <label for="date" class="white-text">DOB</label><br/>
    <div class="input-field col s12">
          <input id="date" type="date" class="validate white-text" value="<?php echo $rowemp['dob'] ;?>" name="dob">
          
      </div> 
        <div class="input-field col s12">
          <input id="email" type="email" class="validate white-text" value="<?php echo $rowemp['email'] ;?>" name="email">
          <label for="email" class="white-text">Email</label>
      </div>  
            
        <div class="input-field col s12">
          <input id="mobile" type="text" class="validate white-text" value="<?php echo $rowemp['mobile'] ;?>" name="mobile">
          <label for="mobile"class="white-text">Mobile</label>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea white-text" name="address"><?php echo $rowemp['address'] ;?></textarea>
          <label for="textarea1" class="white-text">Address</label>
        </div>
      </div>
      
           <div class="row" > 
      <input class="col s4 offset-s4 btn black" type="submit" value="UPDATE"/>
      </div>
   
<?php } ?>
	  </form>
    </div>
<script>
$(document).ready(function() {
    $('select').material_select();
  });
        
    </script>
</body>
</html>