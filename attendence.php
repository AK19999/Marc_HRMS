<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php?msg=3");
}
//include("headerside.php");
include("connect.php");
$set=include("includes/timeconfig.php");
if($set==True)
{
//echo "timezone set hai";
} 
else{
   // echo "not set";
}
@$dept_id=$_REQUEST['dept_id'];
//echo $dept_id;
$query_info="select * from tbl_employee where dept_id='$dept_id'";
$res_info=mysql_query($query_info);
while($row_info=mysql_fetch_array($res_info))
{
    //print_r($row_info);-
    $emp_id=$row_info['emp_id'];
    $check=mysql_query("insert into tbl_attendence(emp_id,att_status,date,time) values('$emp_id','absent','$set_date','$set_time')");
    if($check==false)
    {
        echo "<script>alert('Attendance already marked');</script>";
        break;
    }
}
?>
<html>
<head>
<link rel="stylesheet" href="css/font-awesome.css">
<link href="css/icon.css" rel="stylesheet"/>
 <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> 
<script src="vendors/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet"  href="vendors/DataTables/jquery.datatables.min.css">	
    <script src="vendors/DataTables/jquery.dataTables.min.js" type="text/javascript"></script> 
    <link rel="stylesheet"  href="vendors/DataTables/buttons.datatables.min.css">    
    <script src="vendors/DataTables/dataTables.buttons.min.js" type="text/javascript"></script> 
    <script src="vendors/DataTables/jszip.min.js" type="text/javascript"></script> 
    <script src="vendors/DataTables/pdfmake.min.js" type="text/javascript"></script> 
    <script src="vendors/DataTables/vfs_fonts.js" type="text/javascript"></script> 
    <script src="vendors/DataTables/buttons.html5.min.js" type="text/javascript"></script> 
<!--trrigger for the DataTables/buttons-->
<script>
$(document).ready( function () {
    $('#table_id').DataTable({
        "lengthMenu": [[5,10, 25, 50,100, -1], [5,10, 25, 50,100, "All"]],
    	dom: 'lBfrtip',
                buttons: [
                    {extend: 'copy', attr: {id: 'allan'}}, 'csv', 'excel', 'pdf'
                ]
    });
} );
</script>
<title>Add Attendance</title>
</head>
<?php
//include("headerside.php");
$query="select * from tbl_attendence where date='$set_date'";
$res=mysql_query($query);
?>
<body bgcolor="skyblue">
<a href="dashboard.php">Go to Dashboard</a>
<center>
<h1>Add Attendance</h1>
<?php //echo $set_time,$set_date ; ?>
<h4>Department :
<select id="sel_dept" onchange="change_dept()">
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
    </h4>
    
<table id="table_id" border="1px solid black">
<thead>
<tr>
<th>Employee Name</th>
<th>Department</th>
<th>Current Status</th>
<th>Update Status</th>
<th>Date</th>
<th>Time</th>
</tr>
</thead>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
     $att_id=$row['0'];
    $emp_id=$row['emp_id'];
  ?>
  <tbody>
    <tr>   
    <td><?php 
    $query_emp="select * from tbl_employee where emp_id='$emp_id'";
    $res_emp=mysql_query($query_emp);
if($row_emp=mysql_fetch_array($res_emp)){
    $dept_id=$row_emp['dept_id'];
    echo $row_emp['name'];
    } ?></td>
    <td>
    <?php 
    $query_dept="select * from tbl_department where dept_id='$dept_id'";
    $res_dept=mysql_query($query_dept);
    if($row_dept=mysql_fetch_array($res_dept))
    {
    echo $row_dept['department']; }?></td>
    <td><?php echo $row['att_status']; ?></td>
    <td>
    <?php 
    if($row['att_status']=='absent')
    { ?>
        <a class="btn blue" href="att_present.php?id=<?php echo $att_id; ?>">Present</a>
        <?php
        }
        else
        {
        ?>
        <a class="btn red" href="att_absent.php?id=<?php echo $att_id;?>">Absent</a>
        <?php 
        } 
        ?>
        </td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['time']; ?></td>
    </tr>
    </tbody>
    <?php
}
?>
</table>



</center>
<script>
function change_dept()
{
var dept=document.getElementById("sel_dept");
//alert(dept.value);
var dept_id=dept.value;
//attendence.php?dept_id=
window.location.href="attendence.php?dept_id="+dept_id;
}
</script>


</body>
</html>