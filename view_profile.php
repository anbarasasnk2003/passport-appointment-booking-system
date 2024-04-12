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
						$aname=$_SESSION['aname'];
						$g=mysql_query("select * from accomodator where aname='$aname'");
						while($h=mysql_fetch_array($g))
						{
						$aemail=$h['aemail'];
$aname=$h['aname'];
$aadhar=$h['aadhar'];

$apass=$h['apass'];
$aphone=$h['aphone'];
$addr=$h['addr'];
$aphoto=$h['aphoto'];		
echo '<table align="left" cellpadding="10" cellspacing="0" border="0">';
echo "<tr><td>Email</td><td>$aemail</td></tr>
<tr><td>Name</td><td>$aname</td></tr>
<tr><td>Phone</td><td>$aphone</td></tr>
<tr><td>Address</td><td>$addr</td></tr>
<tr><td>Photo</td><td><img src='upload/$aphoto' width='100px'></td></tr>
<tr><td></td><td></td></tr>
</table>";
							}
							?>
						</div>

<?php
if(isset($h['submit']))
{
$rfile=$_FILES['rfile']['name'];
$vsdate=$h['vsdate'];
$vedate=$h['vedate'];
$pnum=$h['pnum'];
$frid=$_SESSION['frid'];

$rfile=$_FILES['rfile']['name'];
move_uploaded_file($_FILES['rfile']['tmp_name'],"upload/$rfile");

mysql_query("update new_applicants set vsdate='$vsdate',vedate='$vedate',rfile='$rfile' where pnum='$pnum'");
echo "<script type='text/javascript'>alert('Passport renewed successfully');</script>";

}
?>
						
					</div>
					
			</section>
							<!--BLOG LIST END-->

							
						
						</div>

                        
					</div>
					
				</div>
			</section>
			
		</div>
<?php include("footer.php"); ?>