<?php include("header.php"); ?>
<div class="kf-home-banner inner-banner">
			<div class="container">
				
				<span><i class="icon-hotel"></i></span>
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="">View Notification</a></li>
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
<tr><td>First Name</td><td>Passport number</td><td>Visa number</td><td>Visa start date</td><td>Visa end date</td><td>Visa type</td><td>Phone number</td><td>Email Id</td><td>C-Form Id</td><td>Nationality</td><td>city</td><td>Applicant file</td><td>View Cform</td></tr>
<?php
}
else
{
?>
<tr><td>First Name</td><td>Passport number</td><td>Visa number</td><td>Visa start date</td><td>Visa end date</td><td>Visa type</td><td>Phone number</td><td>Email Id</td><td>C-Form Id</td><td>Nationality</td><td>city</td><td>Applicant file</td><td>View Cform</td></tr>

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
else if($_SESSION['ucity']!='')
{
$city=$_SESSION['ucity'];
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


if($_SESSION['ucity']!='')
{
$uemail=$_SESSION['uemail'];
$p=mysql_query("select * from central where pnum='$pnum' and sleft='no' and email='$uemail'");
$m=mysql_num_rows($p);
$_SESSION['m']=$m;

while($h=mysql_fetch_array($p))
{
$fname=$h['fcname'];
echo "You are requested to leave the country immediately <br/><br/>";


if($_SESSION['pid']!='')
{
echo "<tr><td>$fname</td><td>$pnum</td><td>$vnum</td><td>$vsdate</td><td>$vedate</td><td>$vtype</td><td>$uphone</td><td>$uemail</td><td>$cformid</td><td>$nationality</td><td>$city</td><td><img src='upload/$cfile'></td><td><a href='view-cform.php?cpnum=$pnum' target='_blank'>View</a></td></tr>";
}
else
{
echo "<tr><td>$fname</td><td>$pnum</td><td>$vnum</td><td>$vsdate</td><td>$vedate</td><td>$vtype</td><td>$uphone</td><td>$uemail</td><td>$cformid</td><td>$nationality</td><td>$city</td><td><img src='upload/$cfile'></td><td><a href='view-cform.php?cpnum=$pnum' target='_blank'>View</a></td></tr>";
}
}
}
else
{
$p=mysql_query("select * from central where pnum='$pnum' and sleft='no'");
$m=mysql_num_rows($p);
$_SESSION['m']=$m;

while($h=mysql_fetch_array($p))
{
$fname=$h['fcname'];
echo "$fname not left the country<br/><br/>";


if($_SESSION['pid']!='')
{
echo "<tr><td>$fname</td><td>$pnum</td><td>$vnum</td><td>$vsdate</td><td>$vedate</td><td>$vtype</td><td>$uphone</td><td>$uemail</td><td>$cformid</td><td>$nationality</td><td>$city</td><td><img src='upload/$cfile'></td><td><a href='view-cform.php?cpnum=$pnum' target='_blank'>View</a></td></tr>";
}
else
{
echo "<tr><td>$fname</td><td>$pnum</td><td>$vnum</td><td>$vsdate</td><td>$vedate</td><td>$vtype</td><td>$uphone</td><td>$uemail</td><td>$cformid</td><td>$nationality</td><td>$city</td><td><img src='upload/$cfile'></td><td><a href='view-cform.php?cpnum=$pnum' target='_blank'>View</a></td></tr>";
}
}
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
echo "<script type='text/javascript'>alert('Forward to police');</script>";
}

if(($_GET['cpnum']!='')&&($_GET['action']=='approve_police'))
{
$pnum=$_GET['cpnum'];
mysql_query("update new_applicants set status='Approved by police' where pnum='$pnum'");
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