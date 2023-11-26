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
<title>Add Department</title>
  <div class="row"></br>
<form action="addepartcode.php" method="post" class="blue darken-2 col s6 m5 offset-s3 offset-m3">

        <div class="input-field col s12">
          <input id="text" type="text" class="validate white-text" name="department">
          <label for="text" class="white-text">Enter Department</label>
        </div>
			  
      <div class="row">
      <input class="col s4 offset-s4 btn black" type="submit" value="ADD"/>
      </div>
	  </form>
    </div>
	<div class="row">
	<div class="col s10 m10 offset-s1 offset-m1 blue">
	</br>
    <table class="responsive-table striped">
          <tr>
              <th>Sr.no</th>
              <th>Department</th>
              <th>Date</th>
              <th>Delete</th>
              <th>Update</th>
          </tr>
        <?php
        $i=1;
        while($row=mysql_fetch_array($res,MYSQL_BOTH))
        {
        ?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['department']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><a href="deptdelete.php?id=<?php echo $row['dept_id'] ?>"><i class="fa fa-window-close white red-text"></i></a></td>
        <td><a href="deptupdate.php?id=<?php echo $row['dept_id'] ?>"><i class="fa fa-pencil-square-o black-text"></i></a></td>
        </tr>
        <?php
        $i++;
        }
        ?>
        </table>
		</br>
		</div>
		</div>
</body>
</html>