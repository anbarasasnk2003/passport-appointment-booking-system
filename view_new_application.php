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

<?php
if($_SESSION['pid']!='')
{
?>
<tr><td>First Name</td><td>Passport number</td><td>Visa number</td><td>Visa start date</td><td>Visa end date</td><td>Visa type</td><td>Phone number</td><td>Email Id</td><td>C-Form Id</td><td>Nationality</td><td>city</td><td>Applicant file</td><td>View Cform</td><td>Approve</td></tr>
<?php
}
else
{
?>
<tr><td>First Name</td><td>Passport number</td><td>Visa number</td><td>Visa start date</td><td>Visa end date</td><td>Visa type</td><td>Phone number</td><td>Email Id</td><td>C-Form Id</td><td>Nationality</td><td>city</td><td>Applicant file</td><td>View Cform</td><td>Forward to police</td></tr>

<?php
}
?>
<?php
if($_SESSION['frcity']!='')
{
$city=$_SESSION['frcity'];
}
else if($_SESSION['pcity']!='')
{
$city=$_SESSION['pcity'];
}



$q=mysql_query("select * from new_applicants where status!='Approved by police' and city='$city'");
while($r=mysql_fetch_array($q))
{
$vnum=$r['vnum'];
$vsdate=$r['vsdate'];
$vedate=$r['vedate'];
$vtype=$r['vtype'];

$cformid=$r['cformid'];
$city=$r['city'];
$nationality=$r['nationality'];


$fname=$r['fcname'];
$uemail=$r['email'];
$uphone=$r['phone'];
$pnum=$r['pnum'];
$cfile=$r['cfile'];


if($_SESSION['pid']!='')
{
echo "<tr><td>$fname</td><td>$pnum</td><td>$vnum</td><td>$vsdate</td><td>$vedate</td><td>$vtype</td><td>$uphone</td><td>$uemail</td><td>$cformid</td><td>$nationality</td><td>$city</td><td><img src='upload/$cfile'></td><td><a href='view-cform.php?cpnum=$pnum' target='_blank'>View</a></td><td><a href='view_new_application.php?cpnum=$pnum&action=approve_police'>Approve</a> | <a href='view_new_application.php?cpnum=$pnum&action=reject_police'>Reject</a></td></tr>";
}
else
{
echo "<tr><td>$fname</td><td>$pnum</td><td>$vnum</td><td>$vsdate</td><td>$vedate</td><td>$vtype</td><td>$uphone</td><td>$uemail</td><td>$cformid</td><td>$nationality</td><td>$city</td><td><img src='upload/$cfile'></td><td><a href='view-cform.php?cpnum=$pnum' target='_blank'>View</a></td><td><a href='view_new_application.php?cpnum=$pnum&action=police'>Forward</a></td></tr>";
}

}
?>
					
					</table>		
					</div>
						</div>
						</div>

<?php
if(($_GET['cpnum']!='')&&($_GET['action']=='police'))
{
$pnum=$_GET['cpnum'];
mysql_query("update new_applicants set status='Forward to police' where pnum='$pnum'");
$uname=$_SESSION['uname'];
mail("foreigner@smartfrro.in","Application forward to police","Hi $uname your application has been forward to police");

echo "<script type='text/javascript'>alert('Forward to police');</script>";
}

if(($_GET['cpnum']!='')&&($_GET['action']=='reject_police'))
{
$pnum=$_GET['cpnum'];
mysql_query("update new_applicants set status='Rejected by police' where pnum='$pnum'");
$uname=$_SESSION['uname'];
mail("foreigner@smartfrro.in","Application rejected  by police","Hi $uname your application has been rejected by police");

echo "<script type='text/javascript'>alert('Rejected by police');</script>";
}

if(($_GET['cpnum']!='')&&($_GET['action']=='approve_police'))
{
$pnum=$_GET['cpnum'];
mysql_query("update new_applicants set status='Approved by police' where pnum='$pnum'");
$uname=$_SESSION['uname'];
mail("foreigner@smartfrro.in","Application approved by police","Hi $uname your application has been approved by police");

echo "<script type='text/javascript'>alert('Approved by police');</script>";
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