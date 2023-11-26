<?php
$not_id=$_REQUEST['id'];
include("connect.php");
$res_not=mysql_query("select discription from tbl_notification where not_id='$not_id'");
if($row_not=mysql_fetch_array($res_not))
{
    echo $row_not['discription'];
}
?>
 