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
						echo '<table align="left" cellpadding="10" cellspacing="0" border="1" width="100%" class="tbl">';
						$g=mysql_query("select * from central where track='-1'");
echo "<tr><td>First Name</td><td>Passport number</td><td>Visa number</td><td>Visa start date</td><td>Visa end date</td><td>Visa type</td><td>Phone number</td><td>Email Id</td><td>Nationality</td><td>Track</td><td>Last ATM Activity</td></tr>";						
						while($r=mysql_fetch_array($g))
{
$fcname=$r['fcname'];
$pnum=$r['pnum'];
$vnum=$r['vnum'];
$vsdate=$r['vsdate'];
$vedate=$r['vedate'];
$nationality=$r['nationality'];
$phone=$r['phone'];
$vtype=$r['vtype'];
/*$=$r[''];
$=$r[''];
*/
$cformid=$r['cformid'];
$city=$r['city'];
$nationality=$r['nationality'];


$fname=$r['fcname'];
$uemail=$r['email'];
$uphone=$r['phone'];
$pnum=$r['pnum'];
$addr=$r['addr'];
$cfile=$r['cfile'];

echo "<tr><td>$fname</td><td>$pnum</td><td>$vnum</td><td>$vsdate</td><td>$vedate</td><td>$vtype</td><td>$uphone</td><td>$uemail</td><td>$nationality</td><td>Foreigner moving out of jurisdiction</td></tr>";

						
							}
							echo '</table>';
							
							
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