<?php include("header.php"); ?>
<div class="kf-home-banner inner-banner">
			<div class="container">
				
				<span><i class="icon-hotel"></i></span>
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="">Renewal</a></li>
				</ul>
			</div>
		</div>
        
<div class="kf_content_wrap">
<div class="kf_content_wrap blog-detail-page">
			<section>
				<div class="container">
					<div class="row">
						<?php
						include("sidebar.php");
						?>
						
						<div class="col-md-8 kode-content-area">
							
							<!--BLOG LIST START-->
							<section class="contactus-wrap">
					
					<div class="row">
						<div class="col-xs-12">
						<?php
						if($_SESSION['frcity']!='')
{
$city=$_SESSION['frcity'];
}
else if($_SESSION['pcity']!='')
{
$city=$_SESSION['pcity'];
}

						
						
						$g=mysql_query("select * from change_address where city='$city'");
						while($h=mysql_fetch_array($g))
						{
						$pnum=$h['pnum'];
$cformid=$h['cformid'];
$afile=$h['afile'];
$addr=$h['addr'];
$frid=$h['frid'];
$caid=$h['caid'];
$city=$h['city'];
$status=$h['status'];

echo '<table align="left" cellpadding="10" cellspacing="0" border="0">';
if($_SESSION['frfid']!='')
{
if($status=='Forward To Police')
{
echo "<tr><td>Passport number</td><td>Cformid</td><td>Address</td><td>City</td><td>Frid</td><td>Afile</td><td>Status</td><td>Action</td></tr>
<tr><td>$pnum</td><td>$cformid</td><td>$addr</td><td>$city</td><td>$frid</td><td><img src='upload/$afile' width='100px'></td><td>$status</td><td><a href='view_change_address.php?caid=$caid&action=forward'>Forward To Police</a>&nbsp;&nbsp; | <a href='view_change_address.php?caid=$caid&action=approve'>Approve</a> | <a href='view_change_address.php?caid=$caid&action=reject'>Reject</a></td></tr>";
}
else
{
echo "<tr><td>Passport number</td><td>Cformid</td><td>Address</td><td>City</td><td>Frid</td><td>Afile</td><td>Status</td><td>Action</td></tr>
<tr><td>$pnum</td><td>$cformid</td><td>$addr</td><td>$city</td><td>$frid</td><td><img src='upload/$afile' width='100px'></td><td>$status</td><td><a href='view_change_address.php?caid=$caid&action=approve&addr=$addr&pnum=$pnum'>Approve</a> | <a href='view_change_address.php?caid=$caid&action=reject'>Reject</a></td></tr>";
}

}
else
{
echo "<tr><td>Passport number</td><td>Cformid</td><td>Address</td><td>City</td><td>Frid</td><td>Afile</td><td>Status</td><td>Action</td></tr>
<tr><td>$pnum</td><td>$cformid</td><td>$addr</td><td>$city</td><td>$frid</td><td><img src='upload/$afile' width='100px'></td><td>$status</td><td><a href='view_change_address.php?caid=$caid&action=approve'>Approve</a> | <a href='view_change_address.php?caid=$caid&action=reject'>Reject</a></td></tr>";
}
echo "</table>";
							}
							?>
						</div>

					
					</div>
			</section>
						</div>

                        
					</div>
					
				</div>
			</section>
			
		</div>
<?php
if(($_GET['caid']!='')&&($_SESSION['pid']!=''))
{
$caid=$_GET['caid'];
mysql_query("update change_address set status='Approved by police' where caid='$caid'");
echo "<script type='text/javascript'>alert('Approved by police');</script>";
}
if(($_GET['caid']!='')&&($_SESSION['frfid']!='')&&($_GET['action']=='forward'))
{
$caid=$_GET['caid'];
mysql_query("update change_address set status='Forward to Police' where caid='$caid'");
echo "<script type='text/javascript'>alert('Forward to Police');</script>";
}
if(($_GET['caid']!='')&&($_SESSION['frfid']!='')&&(($_GET['action']=='approve')||($_GET['action']=='reject')))
{
$addr=$_GET['addr'];
$pnum=$_GET['pnum'];

if($_GET['action']=='approve')
{
mysql_query("update new_applicants set newaddr='$addr' where pnum='$pnum'");
mysql_query("update change_address set status='Approved by FRRO' where caid='$caid'");
echo "<script type='text/javascript'>alert('Approved by FRRO');</script>";
}

if($_GET['action']=='reject')
{
mysql_query("update change_address set status='Rejected  by FRRO' where caid='$caid'");
echo "<script type='text/javascript'>alert('Rejected by FRRO');</script>";
}


}

?>
		
<?php include("footer.php"); ?>