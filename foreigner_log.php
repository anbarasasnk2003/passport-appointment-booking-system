<?php include("header.php"); ?>
<div class="kf-home-banner inner-banner">
			<div class="container">
				
				<span><i class="icon-hotel"></i></span>
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="">Statistics</a></li>
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
						
						
							<form action="" method="post" enctype="multipart/form-data">
							Enter Passport number<br/>
					<input class="input-left" type="text" name='pnum'   value=""  ><br/>
							
							<br/>
							
					Available Start Date:<br/>
					<input class="input-left" type="text" name='aesdate'   value="" placeholder="yyyy-mm-dd" ><br/>


					Available End Date:<br/>
					<input class="input-left" type="text" name='aeedate'   value="" placeholder="yyyy-mm-dd" ><br/>
					
					
					Not Available Start Date:<br/>
					<input class="input-left" type="text" name='naesdate'   value="" placeholder="yyyy-mm-dd" ><br/>


					Not Available End Date:<br/>
					<input class="input-left" type="text" name='naeedate'   value="" placeholder="yyyy-mm-dd" ><br/>

					
					
					<button type='submit' name='submit'>Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
					
							</form>
							</div>	
							
					
						

<?php
if(isset($_POST['submit']))
{
$pnum=$_POST['pnum'];
$aesdate=$_POST['aesdate'];
$aeedate=$_POST['aeedate'];

$naesdate=$_POST['naesdate'];
$naeedate=$_POST['naeedate'];

mysql_query("insert into foerigner_log(pnum,aesdate,aeedate,naesdate,naeedate)values('$pnum','$aesdate','$aeedate','$naesdate','$naeedate')");

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