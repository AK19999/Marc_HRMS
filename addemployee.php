<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
include("headerside.php");
include("connect.php");
$query="select * from tbl_department";
$res=mysql_query($query);
?>
<title>ADD EMPLOYEE</title>
  <div class="row"><br>
<form action="addemployeecode.php" method="post" class="light-blue darken-2 col s4 m6 offset-m3" enctype="multipart/form-data">
<h3 class="center-align white-text">ADD EMPLOYEE</h3>
        <div class="input-field col s12">
          <input id="name" type="text" class="validate white-text" name="name">
          <label for="name"class="white-text">Name</label>
        </div>
              <div class="input-field col s12">
          <input id="fname" type="text" class="validate white-text" name="fname">
          <label for="fname"class="white-text">F'Name</label>
        </div>
        <label class="white-text" for="test1">Gender</label>
        <p class="white-text">
      <input name="g" type="radio" id="test1" value="male"/>
      <label class="white-text" for="test1">Male</label>
      <input name="g" type="radio" id="test2" value="female"/>
      <label class="white-text" for="test2">Female</label>
      <input name="g" type="radio" id="test3" value="other"/>
      <label class="white-text" for="test3">Other</label>
    </p>

    
    <label for="date" class="white-text">DOB</label><br/>
    <div class="input-field col s12">
          <input id="date" type="date" class="validate white-text" name="dob">
          
      </div> 
        <div class="input-field col s12">
          <input id="email" type="email" class="validate white-text" name="email">
          <label for="email" class="white-text">Email</label>
      </div>  
        <div class="input-field col s12">
          <input id="password" type="password" class="validate white-text" name="password">
          <label for="password"class="white-text">Password</label>
        </div>

        <label for="department"class="white-text"><b>Depatment</b></label>
        <div class="input-field col s12 white-text">
        <select name="department">
        <option value="">--select department--<option>
        <?php
        while($row=mysql_fetch_array($res,MYSQL_BOTH))
        {
          ?>
        <option value="<?php echo $row['dept_id']; ?>"><?php echo $row['department']; ?></option>
        <?php
        }
        ?>
        </select>
      </div>
        <div class="input-field col s12">
          <input id="mobile" type="text" class="validate white-text" name="mobile">
          <label for="mobile"class="white-text">Mobile</label>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="address"></textarea>
          <label for="textarea1" class="white-text">Address</label>
        </div>
      </div>
      
        <div class="col s12 file-field input-field">
        <div class="btn amber black-text">
        <span>Image</span>
        <input type="file" name="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="file" placeholder="Upload Image">
    </div>
      </div>
      <br/> <br/> <br/>
      <div class="row" > 
      <input class="col s4 offset-s4 btn black" type="submit" value="ADD EMPLOYEE"/>
      </div>
	  </form>
    </div>
<script>
$(document).ready(function() {
    $('select').material_select();
  });
        
    </script>
</body>
</html>