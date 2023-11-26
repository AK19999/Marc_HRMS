<?php
session_start();
$e=$_SESSION['employee'];
if($_SESSION['employee']=="")
{
	session_destroy();
	header("location:empprofile.php?msg=3");
}
include("emp_menu.php");
include("connect.php");
$queryemp="select emp_id from tbl_employee where email='$e'";
$resemp=mysql_query($queryemp);
while($rowemp=mysql_fetch_array($resemp,MYSQL_BOTH))
{
$empid=$rowemp['emp_id'];
}
$queryempid="insert into tbl_applyleaves(empid) values('$empid')";
$query="select * from tbl_applyleaves where empid='$empid'";
$res=mysql_query($query);
?>
<title>Apply Leave</title>
<div class="row"><br>
<form action="leavecode.php?id=<?php echo $empid; ?>" method="post" class="light-blue white-text darken-2 col s4 m8 offset-s4 offset-m2">

<h1 class="center-align white-text">Apply For Leave</h1>
        <div class="input-field col s12">
          <input id="text" type="text" class="validate white-text" name="title">
          <label for="text" class="white-text">Title</label> 
      </div>
      <div class="input-field col s12">
          <input id="text" type="text" class="validate white-text" name="description">
          <label for="text" class="white-text">Description</label> 
      </div>
      <div class="row">
      <label for="date" class="white-text">Date From</label> 
      <div class="input-field col s12">
          <input id="date" type="date" class="validate white-text" name="date1">  
      </div>
      </div>
      <div class="row">
      <label for="date" class="white-text">Date Till</label> 
      <div class="input-field col s12">
          <input id="date" type="date" class="validate white-text" name="date2">  
      </div>
</div>
<div class="row" > 
      <input class="col s4 offset-s4 btn black" type="submit" value="Apply"/>
      </div>
      </form>
      </div>
    <table class="striped">
          <tr>
              <th>Sr.no</th>
              <th>Title</th>
              <th>Description</th>
              <th>Date From</th>
              <th>Till</th>
              <th>Date</th> 
              <th>Status</th>          
          </tr>
        <?php
        $a=1;
        while($row=mysql_fetch_array($res,MYSQL_BOTH))
        {
        ?>
        <tr>
        <td><?php echo $a; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['datefrom']; ?></td>
        <td><?php echo $row['till']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['status']; ?></td>

        </tr>
        <?php
        $a++;
        }
        ?>
        </table>


</body>
</html>