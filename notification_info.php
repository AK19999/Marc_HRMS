<?php
$not_id=$_REQUEST['id'];
include("connect.php");
$res_not=mysql_query("select discription from tbl_notification where not_id='$not_id'");
if($row_not=mysql_fetch_array($res_not))
{
 $description=$row_not['discription'];
}
?>
<html>
 <head> 
<title>Marc</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="css/materialize.css" type="text/css"/>
<link rel="stylesheet" href="css/font-awesome.css">
<link href="css/icon.css" rel="stylesheet"/>
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/materialize.js"></script>
</head>
<div class="row"><br>
<div class="col s8 m6 offset-s2 offset-m2" style="background:rgba(0,0,0,0.5);">
<div class="white-text"><?php echo $description; ?></div><br>
 <a class="btn green white-text" href="applyhere.php?id=<?php echo $not_id; ?>">Apply Here</a>
 <br><br>
 </div>
 </div>