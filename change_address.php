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
					<input class="input-left" type="text" name='addr' placeholder="Addres" required >
					<input class="input-left" type="text" name='city' placeholder="City" required >
					<input class="input-left" type="text" name='pnum' placeholder="Passport number" required value="<?php echo $_SESSION['pnum']; ?>" readonly="readonly">
					<input class="input-left" type="text" name='cformid' placeholder="Cform Id" required >
									<input class="input-left" type="file" name='afile' placeholder="" >
									
								<button type='submit' name='submit'>Renew</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</form>
							<?php
							}
							?>
						</div>

<?php
if(isset($_POST['submit']))
{
$afile=$_FILES['afile']['name'];
$addr=$_POST['addr'];
$cformid=$_POST['cformid'];
$pnum=$_POST['pnum'];
$city=$_POST['city'];

$frid=$_SESSION['frid'];

$afile=$_FILES['afile']['name'];
move_uploaded_file($_FILES['afile']['tmp_name'],"upload/$afile");

$j=mysql_query("select * from change_address where pnum='$pnum' and cformid='$cformid'");
$k=mysql_num_rows($j);
if($k>0)
{
mysql_query("update change_address set addr='$addr' where pnum='$pnum' and cformid='$cformid'");
}
else
{
mysql_query("insert into change_address(pnum,cformid,afile,addr,frid,city)values('$pnum','$cformid','$afile','$addr','$frid','$city')");
}
echo "<script type='text/javascript'>alert('Change of address request sent to FRRO');</script>";

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