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
					<input class="input-left" type="text" name='dreason' placeholder="Reason for delay" required >
									<input class="input-left" type="file" name='sfile' placeholder="" >
									
								<button type='submit' name='submit'>Renew</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</form>
							<?php
							}
							?>
						</div>

<?php
if(isset($_POST['submit']))
{
$sfile=$_FILES['sfile']['name'];
$pnum=$_POST['pnum'];
$dreason=$_POST['dreason'];
$frid=$_SESSION['frid'];

$rfile=$_FILES['sfile']['name'];
move_uploaded_file($_FILES['sfile']['tmp_name'],"upload/$sfile");

mysql_query("update new_applicants set dreason='$dreason',sfile='$sfile',status='Applied for Exit Permit' where pnum='$pnum'");
echo "<script type='text/javascript'>alert('Applied for Exit Permit');</script>";

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