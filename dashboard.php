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
						$vedate=$h['vedate'];

?>
							<form action="" method="post" enctype="multipart/form-data">
					<input class="input-left" type="text" name='pnum' placeholder="Passport number" required value="<?php echo $_SESSION['pnum']; ?>" readonly="readonly">
					<input class="input-left" type="text" name='vsdate' placeholder="Visa start date" required value="<?php echo $vedate; ?>" readonly="readonly">
					<input class="input-left" type="text" name='vedate' placeholder="Visa end date" required value="<?php  echo date("Y-m-d"); ?>">
									<input class="input-left" type="file" name='rfile' placeholder="" >
									
								<button type='submit' name='submit'>Renew</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</form>
							<?php
							}
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

mysql_query("update new_applicants set vsdate='$vsdate',vedate='$vedate',rfile='$rfile',status='Applied for Renewal' where pnum='$pnum'");
echo "<script type='text/javascript'>alert('Applied for Renewal');</script>";

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