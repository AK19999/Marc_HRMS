<?php
$depart=$_POST['department'];
//echo $depart;
include("connect.php");
$query="insert into tbl_department(department,date) values ('$depart',curdate())";
if(mysql_query($query))
{
    header("location:adddepartment.php");
}
else
{
    echo mysql_error();

}

?>