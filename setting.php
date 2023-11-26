<?php 
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
error_reporting(0);
include("headerside.php");
include("connect.php");
$query_emp="select * from tbl_employee";
$res_emp=mysql_query($query_emp);
$access=$_REQUEST['id'];
//echo $access;
/*
$no=rand(1111,9999);
//echo $no;
if($url=='$access')
{
header("location:setting.php");
}
else {
header("location:setting.php?id=$access");
}*/
?>
<div class="row">
<br>
<div class="col s8 m6 offset-s2 offset-m3" style="background:rgba(0,0,0,0.6);">
<h3 class="white-text center"><img src="images/icon/setting.png" height="60"/> Customize Setting</h3>
  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="fa fa-filter_drama"></i>User Access</div>
      <div class="collapsible-body">
      <span></span>
      <table class="white-text">
      <thead>
      <tr>
      <th>Sr. n</th>
      <th>Emplyee Name</th>
      <th>Email</th>
      <th>Action</th>
      </tr>
      </thead>
      <tbody>
      <?php
      $i=1;
      while($row_emp=mysql_fetch_array($res_emp))
      { 
        $empid=$row_emp['emp_id'];
             $status=$row_emp['status'];
        //echo $status,$id;
           ?>
      <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $row_emp['name']; ?></td>
      <td><?php echo $row_emp['email']; ?></td>
      <td>
      <?php if($status=='y') { ?>
          <!-- Switch -->
          <div class="switch">
    <label>
     <a href="lock.php?id=<?php echo $row_emp['0']; ?>">
     <input type="checkbox" <?php if($status=='y') { ?> checked <?php } ?>>
  <span class="lever"></span></a>
         </label>
    </div>
  <?php
      } 
      else { ?>
      <div class="switch">
        <label>
          <a href="unlock.php?id=<?php echo $row_emp['0']; ?>">
      <input type="checkbox"/>
    <span class="lever"></span></a>
            </label>
            </div>
      <?php
      }
      ?>
      </td>
      </tr>    
      <?php
      $i++;
    }
    ?> 
      </tbody>
      </table>
      </div>
    </li>
    <li>
    <!-- Attendance-->
      <div class="collapsible-header"><i class="fa fa-place"></i>Attenedance Access</div>
      <div class="collapsible-body white-text"> <span> Here Admin Gets the privileges to control access of Attenedance No Futher can Be marcked ifonce committed</span>
      <table>
      <?php
      $res_mode=mysql_query("select * from tbl_access where email='attendance'");//attendance-->accessname;
if($row=mysql_fetch_array($res_mode,MYSQL_BOTH))
{
	//print_r($row);
	$access_mode=$row['password'];//accessname--->mode
	//echo $access_mode;
}
     ?>  <?php if($access_mode=='locked') { ?>
      <!-- Switch -->
      <div class="switch">
<label>
 <a href="atd_unlock.php?id=<?php echo $row['0']; ?>">
 <input type="checkbox" <?php if($access_mode=='locked') { ?> checked <?php } ?> >
<span class="lever"></span></a>
     </label>
</div>
<?php
  } 
  
  else { ?>
    <div class="switch">
      <label>
        <a href="atd_lock.php?id=<?php echo $row['0']; ?>">
    <input type="checkbox"/>
  <span class="lever"></span></a>
          </label>
          </div>
    <?php
    }
    ?>
     </table>

      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="fa fa-reorder"></i>Feature Update</div>
      <div class="collapsible-body white-text"><span>Feature Update.</span></div>
    </li>
  </ul>
  </div>
  </div>

        <script>
         $(document).ready(function(){
    $('.collapsible').collapsible();
  });
        </script>
        </body>
        </html>
       