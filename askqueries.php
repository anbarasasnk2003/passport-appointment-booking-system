<?php include("header.php"); ?>
<div class="kf-home-banner inner-banner">
			<div class="container">
				
				<span><i class="icon-hotel"></i></span>
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="">Ask Queries</a></li>
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
					<input class="input-left" type="text" name='aadhar' placeholder="Aadhar number" required value="" >
								
								<input class="input-left" type="text" name='query' placeholder="Query" required value="" >
					<input class="input-left" type="text" name='descp' placeholder="Description" required value="" >
									
								<button type='submit' name='submit'>Ask Query</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</form>
							<?php
							}
							?>
						</div>

<?php
if(isset($_POST['submit']))
{
$query=$_POST['query'];
$descp=$_POST['descp'];
	$aadhar=$_POST['aadhar'];
$frid=$_SESSION['frid'];
$uname=$_SESSION['uname'];

mysql_query("insert into askqueries(uname,aquery,descp,aadhar)values('$uname','$query','$descp','$aadhar')");
echo "<script type='text/javascript'>alert('Queries has been posted');</script>";

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