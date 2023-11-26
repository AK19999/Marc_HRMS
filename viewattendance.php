<?php
session_start();
 if($_SESSION['admin']=="")
 {
	 session_destroy();
	 header("location:index.php?msg=3");
 }
$set=include("includes/timeconfig.php");
if($set==true)
{
	//echo "time zone set";
}
else
{
	//echo "time zone not set";
}
//echo $set_date;
//echo $set_time;

@$date=$_REQUEST['date'];
//echo $date;
include("connect.php");
?>
<html>
<head>
<title>View Attendance </title>
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

<!--**link tag for External Library of Data Tables****-->
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
</head>

<body bgcolor="skyblue">
<a href="dashboard.php">Go To Dashboard</a>
<center>
<h1>View Attendance</h1>
<div id="outer">
Select DATE
<select name="date_id" id="sel_date" onchange="change_date();">
<option value="">--Select--</option>
<?php
$query_date="select distinct date from tbl_attendence";
$res_date=mysql_query($query_date);

while($row_date=mysql_fetch_array($res_date,MYSQL_BOTH))
{
	?>
	<option value="<?php echo $row_date['date']; ?>"><?php echo $row_date['date'];?></option>
<?php
}
?>
</select></br>

<table id="table_id" border="1" align="center" >
<thead>
<tr>
<th>S.no</th>
<th>employee name</th>
<th>attd_status</th>
<th>date</th>
<th>time</th>
</tr>
</thead>
<tbody><?php
$query_info="select * from tbl_attendence where date='$date' and att_status='present'";
$res_info=mysql_query($query_info);
$a=1;
while($row_info=mysql_fetch_array($res_info,MYSQL_BOTH))
{
?>
	<tr>
		<td><?php echo $a;?></td>
		<td><?php $id= $row_info['1'];
			$query2="select * from tbl_employee where emp_id='$id'";	
			$res1=mysql_query($query2);
			if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
			{
				?>
				<?php echo $row1['name']?>
				<?php
			}
		?></td>
		<td><?php echo $row_info['2']?></td>
		<td><?php echo $row_info['3']?></td>
		<td><?php echo $row_info['4']?></td>
	</tr>
	<?php
	$a++;
}
?>
</tbody>
</table>
</div>
</center>
<script>
function change_date()
{
	var date=document.getElementById("sel_date");
	//alert(date.value);
	var date_id=date.value;
	//addattendance.php?date_id=
	window.location.href="viewattendance.php?date="+date_id;
}
</script>
</body>
</html>
