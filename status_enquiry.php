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
						$uname=$_SESSION['uname'];
						$pnum=$_SESSION['pnum'];
						$g=mysql_query("select * from new_applicants where pnum='$pnum'");
						while($h=mysql_fetch_array($g))
						{
						$status=$h['status'];
						
						echo "$status <br/>";
						
							}
							
							
							/*$l=mysql_query("select * from change_address where pnum='$pnum'");
						while($j=mysql_fetch_array($l))
						{
						$status=$j['status'];
						
						echo "Change of address $status<br/>";
						
							}*/
							?>
						</div>

<?php
if(isset($_POST['submit']))
{
$rfile=$_FILES['rfile']['name'];
$vsdate=$_POST['vsdate'];
$vedate=$_POST['vedate'];
$pnum=$_POST['pnum'];
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