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
						<div class="tblcls">
<table align="left" cellpadding="10" cellspacing="0" border="1" width="100%" class="tbl">
<tr><td>First Name</td><td>Passport number</td><td>Visa start date</td><td>Visa end date</td><td>Phone number</td><td>Email Id</td><td>C-Form Id</td><td>Nationality</td><td>city</td><td>Renewal file</td><td>Approval</td><td>Notify</td></tr>
<?php
$city=$_SESSION['frcity'];
$q=mysql_query("select * from new_applicants where city='$city'");
while($r=mysql_fetch_array($q))
{

$vsdate=$r['vsdate'];
$vedate=$r['vedate'];

$cformid=$r['cformid'];
$city=$r['city'];
$nationality=$r['nationality'];


$fname=$r['fcname'];
$uemail=$r['email'];
$uphone=$r['phone'];


$pnum=$r['pnum'];
$rfile=$r['rfile'];
echo "<tr><td>$fname</td><td>$pnum</td><td>$vsdate</td><td>$vedate</td><td>$uphone</td><td>$uemail</td><td>$cformid</td><td>$nationality</td><td>$city</td><td><img src='upload/$rfile'></td><td><a href='view_renewal.php?pnum=$pnum&action=renew&vsdate=$vsdate&vedate=$vedate'>Renew</a></td><td><a href='view_renewal.php?action=mail&fname=$fname&pnum=$pnum'>Notify</a></td></tr>";
}
if($_GET['action']=='mail')
						{
						$pnum=$_GET['pnum'];
						$g=mysql_query("select * from new_applicants where pnum='$pnum'");
						while($h=mysql_fetch_array($g))
						{
						$uemail=$h['uemail'];
						$vedate=$h['vedate'];
						$uname=$h['fcname'];
							
							mysql_query("update new_applicants set status='Renewal Approved' where pnum='$pnum'");
							echo "<script type='text/javascript'>alert('Renewal Approved');</script>";
							
							
												
						/*mail("police@smartfrro.in","$uname visa expires on $vedate","$uname Did not leave the country");
						echo "<script type='text/javascript'>alert('Visa expiration alert sent to Police and FRRO');</script>";*/
						
							}
							}
?>
					
					</table>		
						</div>
						</div>
						</div>

<?php
if(($_GET['pnum']!='')&&($_GET['action']=='renew'))
{
$vsdate=$_GET['vsdate'];
$vedate=$_GET['vedate'];
$pnum=$_GET['pnum'];
mysql_query("update central set vsdate='$vsdate',vedate='$vedate' where pnum='$pnum'");
echo "<script type='text/javascript'>alert('Visa Renewed');</script>";
	mysql_query("update new_applicants set status='Renewal Approved' where pnum='$pnum'");
							echo "<script type='text/javascript'>alert('Renewal Approved');</script>";
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