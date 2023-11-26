<?php
include("headerside.php");
include("connect.php");
$res_shd=mysql_query("select * from tbl_shedule");
?>
<div class="row"></br>
<div class="col s8 m6 offset-s2 offset-m3" style="background:rgba(0,0,0,0.6)">
<table class="white-text">
<tr>
<th>Sr.n</th>
<th>Name</th>
<th>Venue</th>
<th>date</th>
<th>time</th>
<th>Current date</th>
<th>Selection</th>
<th>Print</th>
</tr>
<?php

$i=1;
while($row_shd=mysql_fetch_array($res_shd))
{  $selection=$row_shd['selection'];
    $app_id=$row_shd['app_id'];
    $shd_id=$row_shd['0'];
    $res_aply=mysql_query("select * from tbl_apply where app_id='$app_id'");
    ?>
<tr>
<td><?php echo $i; ?> </td>
<td><?php if($row_aply=mysql_fetch_array($res_aply)) { echo $row_aply['name']; } ?> </td>
<td> <?php echo $row_shd['venue']; ?></td>
<td> <?php echo $row_shd['date']; ?></td>
<td> <?php echo $row_shd['time']; ?> </td>
<td><?php echo $row_shd['currentdate']; ?></td>
<td><?php if($selection=='undone'){ ?><a class="white-text" href="selection_done.php?id=<?php echo $shd_id; ?>"><?php echo $selection; ?></a> <?php } else { ?><a class="white-text" href="selection_undone.php?id=<?php echo $shd_id; ?>"><?php echo $selection; ?></a> <?php } ?></td>
<td><?php if($selection=='undone'){} else { ?><a class="white-text" href="joining_letter.php?id=<?php echo $row_aply['name']; ?>">Print</a> <?php } ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
</div>