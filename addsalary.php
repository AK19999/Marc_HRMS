<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
include("headerside.php");
include("connect.php");
$query_dept="select * from tbl_department";
$res_dept=mysql_query($query_dept);
?>
<title>Add Salary</title>
<div class="row"></br>
<form action="addsalarycode.php" method="post" class="col s6 offset-s3" style="background:rgba(0,0,0,0.4);">
<h3 class="white-text center">ADD SALARY</h3>
<div class="row">
<div class="col s2 m3">
<h5 class="white-text">Department</h5>
<select name="department" onchange="change_dept()">
<option value="">--Choose--</option>
<?php 
    $query_dept1="select * from tbl_department";
    $res_dept1=mysql_query($query_dept1);
    while($row_dept1=mysql_fetch_array($res_dept1))
    {
?>
<option value="<?php echo $row_dept1['0']; ?>"> <?php echo $row_dept1['department']; ?> </option>
<?php
    }?>
    </select>
    </div>
    </div>
<div class="row">
<div class="col "> 
<label class="white-text" for="text">Pay Grade</label>    
<input type="text" name="paygrade"/> 
     </div>   
</div>
  
<div class="row" > 
      <input class="col s4 offset-s4 btn black" type="submit"/><br/>
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