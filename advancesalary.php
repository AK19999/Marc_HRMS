<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
@$msg=$_REQUEST['msg'];
if($msg=='9')
{
  echo "successfull";
}
include("connect.php");
include("headerside.php");
@$deptid=$_REQUEST['dept_id'];
//echo $deptid;
$res_dept1=mysql_query("select * from tbl_department where dept_id='$deptid'");
if($row1=mysql_fetch_array($res_dept1))
{
   $depart=$row1['department'];
}
else{
  $depart="";
}
$res_dept=mysql_query("select * from tbl_department");
?>
<title>Add Advance Salary</title>
</br>
<div class="row">
<div class="col s8 m6 offset-s2 offset-m3">
<form action="advsalcode.php" method="post" class="light-blue darken-2">
<div class="row">
<span for="department"class="white-text"> Department</span>
        <div class="input-field col s11 white-text">
        <input type="hidden" name='deptid' value="<?php echo $deptid;?>" readonly>
        <select name="department" id="department" onchange="change_dept(this.value);">
        <option value=""><?php if($depart==""){ echo "--Select Department--";}else { echo $depart;} ?><option>
        <?php
        while($row=mysql_fetch_array($res_dept))
        {   $dep_id=$row['0'];
          ?>
        <option value="<?php echo $dep_id; ?>"><?php echo $row['department']; ?></option>
        <?php
        }
        ?>
        </select>
      </div>
    </div>      
      <span for="empname" class="white-text">Employee Name</span>
        <div class="input-field col s11 white-text">
        <select name="emp_id">
        <option value="">--Select Employee--<option>
        <?php
      $res_emp=mysql_query("select * from tbl_employee where dept_id='$deptid'");
      while($row_emp=mysql_fetch_array($res_emp,MYSQL_BOTH))
      { $emp_id=$row_emp['0']; 
         $name=$row_emp['name'];
        ?>
  <option value="<?php echo $emp_id; ?>"><?php echo $name; ?></option>
        <?php
        }
        ?>
        </select>
      </div>
</br>
      <div class="input-field col s11">
          <input id="ression" type="text" class="validate" name="reason">
          <label class="white-text" for="ression">Reason</label>
        </div>
        <div class="input-field col s11">
          <input id="advsal" type="text" class="validate" name="advsal">
          <label class="white-text" for="advsal">Advance Salary</label>
        </div>
      <div class="row" > 
      <input class="col s4 offset-s4 btn black" type="submit"/>
      </div>
</form>
</div>
</div>
      <script>
$(document).ready(function() {
    $('select').material_select();
  });
    </script>
    <script>
    function change_dept(deptid)
    {
      //alert(deptid);
      //advancesalary.php
      window.location.href="advancesalary.php?dept_id="+deptid;
     

    }
    </script>