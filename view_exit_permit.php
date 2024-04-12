<?php include("header.php"); ?>
<div class="kf-home-banner inner-banner">
			<div class="container">
				
				<span><i class="icon-hotel"></i></span>
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="">New Application</a></li>
				</ul>
			</div>
		</div>
        
<div class="kf_content_wrap">
<div class="kf_content_wrap blog-detail-page">
				<div class="container">
					<div class="row">
					<?php
						include("sidebar.php");
						?>
					<div class="col-md-8 kode-content-area">
					<section class="contactus-wrap">
					
					<div class="row">
						<div class="col-xs-12">
<table align="left" cellpadding="10" cellspacing="0" border="1" width="100%" class="tbl">
<tr><td>Passport number</td><td>Reason for Delay</td><td>Supporting file</td><td>Approval</td></tr>
<?php
$city=$_SESSION['frcity'];
$q=mysql_query("select * from new_applicants where city='$city'");
while($r=mysql_fetch_array($q))
{

$dreason=$r['dreason'];
$pnum=$r['pnum'];
$sfile=$r['sfile'];
echo "<tr><td>$pnum</td><td>$dreason</td><td><img src='upload/$sfile'></td><td><a href='view_exit_permit.php?pnum=$pnum&action=approve'>Approve</a> | <a href='view_exit_permit.php?pnum=$pnum&action=reject'>Reject</a></td></tr>";
}
?>
					
					</table>		
						</div>
						</div>

<?php
if(($_GET['pnum']!='')&&(($_GET['action']=='approve')||($_GET['action']=='reject')))
{
$pnum=$_GET['pnum'];
if($_GET['action']=='approve')
{
mysql_query("update new_applicants set status='Exit Permit Approved' where pnum='$pnum'");
echo "<script type='text/javascript'>alert('Exit Permit Approved');</script>";

}
if($_GET['action']=='reject')
{
mysql_query("update new_applicants set status='Exit Permit Rejected' where pnum='$pnum'");
echo "<script type='text/javascript'>alert('Exit Permit Rejected');</script>";
}
}

?>
						
					</div>
					</div>
				</div>
			</section>
			
<div class="clear"></div>
<br/>
</div>
<?php include("footer.php"); ?>