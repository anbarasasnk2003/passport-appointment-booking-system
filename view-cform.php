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
						$cpnum=$_GET['cpnum'];
						$g=mysql_query("select * from cform where cpnum='$cpnum'");
						$c=mysql_num_rows($g);
if($c==0)
{
echo "<script type='text/javascript'>alert('CFORM not uploaded');</script>";
}
						while($h=mysql_fetch_array($g))
						{
						$cpnum=$h['cpnum'];
$cformid=$h['cformid'];
$cname=$h['cname'];
$cmail=$h['cmail'];
$cphone=$h['cphone'];
$cgrade=$h['cgrade'];
$ccity=$h['ccity'];
$cstate=$h['cstate'];
$caddr=$h['caddr'];
$cphoto=$h['cphoto'];

echo "<table align='left' cellpadding='10' cellsapcing='0' border='1' width='100%'>
<tr><td>Photo</td><td><img src='upload/$cphoto' /></td></tr>
<tr><td>C-FORMID</td><td>$cformid</td></tr>
<tr><td>Name</td><td>$cname</td></tr>
<tr><td>Mail Id</td><td>$cmail</td></tr>
<tr><td>Phone</td><td>$cphone</td></tr>
<tr><td>Grade</td><td>$cgrade</td></tr>
<tr><td>City</td><td>$ccity</td></tr>
<tr><td>Address</td><td>$caddr</td></tr>
</table>";
							}
							?>
						</div>

					
					</div>
					
			</section>
							<!--BLOG LIST END-->

							
						
						</div>

                        
					</div>
					
				</div>
			</section>
			
		</div>
<?php include("footer.php"); ?>