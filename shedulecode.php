<?php
$app_id=$_REQUEST['id'];
$venue=$_POST['venue'];
$date=$_POST['date'];
$time=$_POST['time'];
$selection='undone';
$mobile=$_POST['mobile'];
echo $mobile;
//echo $app_id,$venue,$date,$time;
$message="your Venue:$venue. Timming :$time.,Date : $date";
echo "<script>window.location.href='http://www.bulksmsapps.com/api/apismsv2.aspx?apikey=f9ebb7bf-a4c5-4e45-a1cf-cfed513562d8&sender=AWNISH&number=$mobile&message=$message';</script>"; 

include("connect.php");
$query_shd="insert into tbl_shedule(app_id,venue,date,time,currentdate,selection) values ('$app_id','$venue','$date','$time',curdate(),'$selection')";
mysql_query($query_shd);
echo $query_shd;
header("location:viewschedulelist.php");
?>