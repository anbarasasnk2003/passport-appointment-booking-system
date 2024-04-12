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
						$payment=$h['payment'];
						$_SESSION['email']=$h['email'];
						if($payment=='1000')
						{
						$payment='0';
						}
						else
						{
						$payment='1000';
						}

?>
							<form action="" method="post" enctype="multipart/form-data">
					<input class="input-left" type="text" name='pnum' placeholder="Passport number" required value="<?php echo $_SESSION['pnum']; ?>" readonly="readonly">
					<input class="input-left" type="text" name='payment' placeholder="" required value="<?php echo $payment; ?>" readonly="readonly">
									
								<button type='submit' name='submit'>Pay</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</form>
							<?php
							}
							?>
						</div>

<?php
if(isset($_POST['submit']))
{
$pnum=$_POST['pnum'];
$payment=$_POST['payment'];
$frid=$_SESSION['frid'];
$uname=$_SESSION['uname'];

mail("foreigner@smartfrro.in","Payment notification","Hi $uname your payment of Rs.$payment is successful");

mysql_query("update new_applicants set payment='$payment' where pnum='$pnum'");
echo "<script type='text/javascript'>alert('Payment done');</script>";

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