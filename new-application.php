<?php include("header.php"); ?>
<div class="kf-home-banner inner-banner">
			<div class="container">
				
				<span><i class="icon-hotel"></i></span>
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="">New Application</a></li>
				</ul>
			</div>
		</div>
        
<div class="kf_content_wrap">
<div class="kf_content_wrap blog-detail-page">
				<div class="container">
					<div class="row">
					<?php
						include("sidebar.php");
						?>
					<div class="col-md-8 kode-content-area">
					<section class="contactus-wrap">
					
					<div class="row">
						<div class="col-xs-12">
						<?php
						$uname=$_SESSION['uname'];
						$pnum=$_SESSION['pnum'];
						$g=mysql_query("select * from central where pnum='$pnum'");
						while($h=mysql_fetch_array($g))
						{
						$fcname=$h['fcname'];
						$pnum=$h['pnum'];
						$vnum=$h['vnum'];
						$vsdate=$h['vsdate'];
						$vedate=$h['vedate'];
						$vtype=$h['vtype'];
						$nationality=$h['nationality'];
						$phone=$h['phone'];
						$email=$h['email'];
						?>
							<form action="" method="post" enctype="multipart/form-data">
									<input class="input-left" type="text" name='fname' placeholder="First Name" required value="<?php echo $fcname; ?>" readonly >
									<input class="input-left" type="text" name='pnum' placeholder="Passport number" required value="<?php echo $pnum; ?>" readonly="readonly">

									<input class="input-left" type="text" name='vnum' placeholder="Visa number" required value="<?php echo $vnum; ?>" readonly="readonly">
									<input class="input-left" type="text" name='vsdate' placeholder="Visa start date" required value="<?php  echo $vsdate; ?>" readonly="readonly">
									<input class="input-left" type="text" name='vedate' placeholder="Visa end date" required value="<?php  echo $vedate; ?>" readonly="readonly">

									<input class="input-left" type="text" name='vtype' placeholder="Visa type" required value="<?php  echo $vtype; ?>" readonly="readonly">


<input class="input-left" type="text" name='uphone' placeholder="Phone number" required value="<?php  echo $phone; ?>" readonly="readonly">

									<input class="input-left" type="text" name='uemail' placeholder="Email Id" required value="<?php  echo $email; ?>" readonly="readonly">
									<input class="input-left" type="text" name='cformid' placeholder="C-Form Id" required >
									
									<input class="input-left" type="text" name='nationality' placeholder="Nationality" required value="<?php  echo $nationality; ?>" readonly="readonly">
									
									<input class="input-left" type="text" name='addr' placeholder="Address" required >
									
									
									<select name="city">
<option value="">Select city</option>
<option value="coimbatore">coimbatore</option>
<option value="chennai">Chennai</option>
<option value="mumbai">Mumbai</option>
</select><br/><br/>

<input class="input-left" type="file" name='cfile' placeholder="" required >

								<button type='submit' name='submit'>Create Account</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<?php
								}
								?>
							</form>
						</div>

<?php
if(isset($_POST['submit']))
{
$vnum=$_POST['vnum'];
$vsdate=$_POST['vsdate'];
$vedate=$_POST['vedate'];
$vtype=$_POST['vtype'];

$cformid=$_POST['cformid'];
$city=$_POST['city'];
$nationality=$_POST['nationality'];


$fname=$_POST['fname'];
$uemail=$_POST['uemail'];
$uphone=$_POST['uphone'];
$pnum=$_POST['pnum'];
$addr=$_POST['addr'];


$cfile=$_FILES['cfile']['name'];

$q=mysql_query("select * from new_applicants where vnum='$vnum' and pnum='$pnum'");
$c=mysql_num_rows($q);
if($c>0)
{
while($r=mysql_fetch_array($q))
{
echo "<script type='text/javascript'>alert('New applicants account already exists');</script>";
}
}
else
{
move_uploaded_file($_FILES['cfile']['tmp_name'],"upload/$cfile");

mysql_query("insert into `new_applicants`(pnum,phone,vnum,vsdate,vedate,vtype,city,cformid,fcname,email,cfile,nationality,status,addr,newaddr,rfile,dreason,sfile)values('$pnum','$uphone','$vnum','$vsdate','$vedate','$vtype','$city','$cformid','$fname','$uemail','$cfile','$nationality','Applied for Residential Permit','$addr','','','','')")or die(mysql_error());
echo "<script type='text/javascript'>alert('New applicants registered successfully');</script>";
//echo '<meta http-equiv="refresh" content="0;url=foreigner-login.php"/>';
}
}
?>
						
					</div>
					</div>
				</div>
			</section>
			
<div class="clear"></div>
<br/>
</div>
<?php include("footer.php"); ?>