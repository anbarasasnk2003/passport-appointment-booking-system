<div class="col-md-4 kode-right-sidebar-area">
							<aside class="kf-sidebar">
								<div class="widget widget-categories">
									
<ul>
<?php
if($_SESSION['frid']!='')
{
?>
<li><a href="new-application.php"><i class="fa fa-caret-right"></i> New Application</a></li>
<li><a href="dashboard.php"><i class="fa fa-caret-right"></i> Renewal</a></li>
<li><a href="status_enquiry.php"><i class="fa fa-caret-right"></i> Status Enquiry</a></li>
<li><a href="change_address.php"><i class="fa fa-caret-right"></i> Change Of Address</a></li>
<li><a href="exit_permit.php"><i class="fa fa-caret-right"></i> Exit permit</a></li>
<li><a href="payment.php"><i class="fa fa-caret-right"></i> Payment</a></li>
	<li><a href="askqueries.php"><i class="fa fa-caret-right"></i> Ask Queries</a></li>
	<li><a href="viewqueries.php"><i class="fa fa-caret-right"></i> View Reply</a></li>
<li><a href="view_notification.php"><i class="fa fa-caret-right"></i> View Notification <?php echo "<span style='color:white; width:30px; border-radius:20px; background-color:red; height:25px; padding-left:10px;display:inline-block;'>".$_SESSION['m']."</span>";?></a></li>
<li><a href="logout.php"><i class="fa fa-caret-right"></i> Logout</a></li>
<?php
}
if($_SESSION['frfid']!='')
{
?>
<li><a href="view_new_application.php"><i class="fa fa-caret-right"></i> New Application</a></li>
<li><a href="view_renewal.php"><i class="fa fa-caret-right"></i> Renewal</a></li>
<li><a href="view_change_address.php"><i class="fa fa-caret-right"></i> Change Of Address</a></li>
<li><a href="view_exit_permit.php"><i class="fa fa-caret-right"></i> Exit permit</a></li>
		<li><a href="viewqueries.php"><i class="fa fa-caret-right"></i> Reply to User Queries</a></li>
<li><a href="statistics.php"><i class="fa fa-caret-right"></i> View Statistics</a></li>
<li><a href="view_foreigner_log.php"><i class="fa fa-caret-right"></i>Foreigner Log</a></li>
<li><a href="view_notification.php"><i class="fa fa-caret-right"></i> View Notification <?php 
$p=mysql_query("select * from central where pnum='$pnum' and sleft='no'");
$m=mysql_num_rows($p);
if($m>0)
{
echo "<span style='color:white; width:30px; border-radius:20px; background-color:red; height:25px; padding-left:10px;display:inline-block;'>".$_SESSION['m']."</span>";
}

?></a></li>
<li><a href="track.php"><i class="fa fa-caret-right"></i> Track <?php $p=mysql_query("select * from central where track='-1'");
$m=mysql_num_rows($p);
if($m>0)
{
echo "<span style='color:white; width:30px; border-radius:20px; background-color:red; height:25px; padding-left:10px;display:inline-block;'>$m</span>";
}
?></a></li>
<li><a href="logout.php"><i class="fa fa-caret-right"></i> Logout</a></li>
<?php
}
if($_SESSION['pid']!='')
{
?>
<li><a href="view_new_application.php"><i class="fa fa-caret-right"></i> UnApproved Application</a></li>

<li><a href="approved_application.php"><i class="fa fa-caret-right"></i> Approved Application</a></li>

<li><a href="view_change_address.php"><i class="fa fa-caret-right"></i> Change Of Address</a></li>

<li><a href="view_foreigner_log.php"><i class="fa fa-caret-right"></i>Foreigner Log</a></li>

<li><a href="view_notification.php"><i class="fa fa-caret-right"></i> View Notification <?php $p=mysql_query("select * from central where pnum='$pnum' and sleft='no'");
$m=mysql_num_rows($p);
if($m>0)
{
echo "<span style='color:white; width:30px; border-radius:20px; background-color:red; height:25px; padding-left:10px;display:inline-block;'>$m</span>";
}
?></a></li>

<li><a href="track.php"><i class="fa fa-caret-right"></i> Track <?php $p=mysql_query("select * from central where track='-1'");
$m=mysql_num_rows($p);
if($m>0)
{
echo "<span style='color:white; width:30px; border-radius:20px; background-color:red; height:25px; padding-left:10px;display:block;'>$m</span>";
}
?></a></li>

<li><a href="logout.php"><i class="fa fa-caret-right"></i> Logout</a></li>
<?php
}
if($_SESSION['aid']!='')
{
?>
<li><a href="view_profile.php"><i class="fa fa-caret-right"></i> View Profile</a></li>
<li><a href="cform.php"><i class="fa fa-caret-right"></i> C-FORM</a></li>
<li><a href="view_foreigner_log.php"><i class="fa fa-caret-right"></i>FOREIGNER LOG</a></li>
<li><a href="logout.php"><i class="fa fa-caret-right"></i> Logout</a></li>
<?php
}
?>

</ul>
		
	
								</div>
							</aside>
						</div>