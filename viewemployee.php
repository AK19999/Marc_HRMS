<?php
session_start();
//echo "welcome user"."</br>".$_SESSION['user'];
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
include("headerside.php");
include("connect.php");
$query="select * from tbl_employee";
$res=mysql_query($query);
?>
<title>View Employee</title><br>
  <table class=" white responsive-table striped">
          <tr>
              <th>Sr.no</th>
              <th>Name</th>
              <th>F'Name</th>
              <th>Gender</th>
              <th>Email</th>
              <th>Password</th>
              <th>DOB</th>
              <th>dept_id</th>
              <th>Address</th>
              <th>Mobile</th>
              <th>Image</th>
              <th>Date</th>
              <th>Status</th>
              <th>Delete</th>
             <!-- <th>Update</th> -->
          </tr>
        <?php
        $a=1;
        while($row=mysql_fetch_array($res,MYSQL_BOTH))
        {
        ?>
        <tr>
        <td><?php echo $a; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['fname']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['dob']; ?></td>
<td><?php  $depart=$row['dept_id']; 
$query="select department from tbl_department where dept_id='$depart'";
$redep=mysql_query($query);
if($rodep=mysql_fetch_array($redep,MYSQL_BOTH))
{
echo $rodep['0']; } ?></td>

        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['mobile']; ?></td>

        <td><img src="Employee/<?php echo $row['pic']; ?>" height="40" width="40"/></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td><a class="btn red white-text" href="empdelete.php?id=<?php echo $row['emp_id'] ?>">Delete</a></td>
     <!--   <td><a href="empupdate.php?id=<?php echo $row['emp_id'] ?>">Update</a></td> -->
        </tr>
        <?php
        $a++;
        }
        ?>
        </table>













  
<script>
$(document).ready(function(){

  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is closed
    }
  );
});
</script>
  </body>
  </html>