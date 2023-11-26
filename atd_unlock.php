<?php
include("connect.php");
$ac_id=$_REQUEST['id'];
//echo $ac_id;
mysql_query("update tbl_access set password='unlocked' where ac_id='$ac_id'");
header("location:setting.php");
?>