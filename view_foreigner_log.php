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
						
						echo '<table align="left" cellpadding="10" cellspacing="0" border="0">';
						echo "<tr><td>Passport number</td><td>Available Start Date</td><td>Available End Date</td><td>Not Available Start Date</td><td>Not Available End Date</td></tr>";
						$g=mysql_query("select * from foerigner_log");
						while($h=mysql_fetch_array($g))
						{
						$pnum=$h['pnum'];
$aesdate=$h['aesdate'];
$aeedate=$h['aeedate'];
$naesdate=$h['naesdate'];
$naeedate=$h['naeedate'];

echo "<tr><td>$pnum</td><td>$aesdate</td><td>$aeedate</td><td>$naesdate</td><td>$naeedate</td></tr>";

							}
							echo "</table>";
							?>
						</div>

					
					</div>
			</section>
						</div>

                        
					</div>
					
				</div>
			</section>
			
		</div>
		
<?php include("footer.php"); ?>