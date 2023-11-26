<?php
session_start();
//echo "welcome user"."</br>".$_SESSION['admin'];
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
include("headerside.php");
include("connect.php");
$query="select * from tbl_applyleaves";
$res=mysql_query($query);
?>
  <table class="striped">
          <tr>
              <th>Sr.no</th>
              <th>Name</th>
              <th>Title</th>
              <th>Description</th>
              <th>Date From</th>
              <th>Till</th>
              <th>Date</th> 
              <th>Leave Status</th> 
              <th>Action</th> 
          </tr>
        <?php
        $a=1;
        while($row=mysql_fetch_array($res,MYSQL_BOTH))
        {
            //print_r($row);
            $leave_id=$row['levave_id'];
            //echo $leave_id;
        ?>
        <tr>
        <td><?php echo $a; ?></td>
        <td>
        <?php
        $empid=$row['empid']; 
        $queryempn="select name from tbl_employee where emp_id='$empid'";
        $resempn=mysql_query($queryempn);
        if($rowempn=mysql_fetch_array($resempn,MYSQL_BOTH))
        {
        echo $rowempn['name']; }  ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['datefrom']; ?></td>
        <td><?php echo $row['till']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td>
        <?php
         if($row['status']=='pending')//pending this same as database status
        {
            ?>
        <a style="color:blue;" href="updleaves_grant.php?id=<?php echo $leave_id; ?>">Grant</a>
        <?php
        }
        else
        {
        ?>
        <a style="color:red;" href="updleaves_pending.php?id=<?php echo $leave_id;?>">Pending</a>
        <?php 
        } 
        ?>
        </td>
        </tr>
        <?php
        $a++;
        }
        ?>
        </table>



</body>
</html>