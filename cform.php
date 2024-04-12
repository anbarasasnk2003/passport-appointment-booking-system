<?php include("header.php"); ?>
<div class="kf-home-banner inner-banner">
			<div class="container">
				
				<span><i class="icon-hotel"></i></span>
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="">C-FORM</a></li>
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
							<?php
							$t=mysql_query("select * from cform");
							$g=mysql_num_rows($t);
							
							?>
					<input class="input-left" type="text" name='cformid' placeholder="C-FORMID" required value="C<?php echo $g+1; ?>" readonly="readonly" >
					<input class="input-left" type="text" name='cname' placeholder="Name" required value="<?php echo $_SESSION['aname']; ?>" readonly>
					<input class="input-left" type="email" name='cmail' placeholder="Mail Id" required value="<?php echo $_SESSION['aemail']; ?>" readonly>
					<input class="input-left" type="text" name='cphone' placeholder="Phone" required value="<?php echo $_SESSION['aphone']; ?>" pattern="^\d{10}$" readonly>
<select name="cgrade">
<option value="house">Individual House</option>
<option value="hotel">Hotel</option>
<option value="hostel">Hostel</option>
</select><br/><br/>

<select name="ccity">
<option value="">Select city</option>
<option value="hyderabad" <?php if($_SESSION['city']=='hyderabad') { echo "selected=selected";} else {echo 'disabled="disabled"';} ?> >Hyderabad</option>
<option value="chennai" <?php if($_SESSION['city']=='chennai') { echo "selected=selected";} else {echo 'disabled="disabled"';}  ?> >Chennai</option>
<option value="mumbai" <?php if($_SESSION['city']=='mumbai') { echo "selected=selected";} else {echo 'disabled="disabled"';}  ?> >Mumbai</option>
</select><br/><br/>


	<input class="input-left" type="text" name='caddr' placeholder="Address" required value="<?php echo $_SESSION['addr']; ?>" readonly>
	
	<input class="input-left" type="file" name='cphoto' placeholder="" required >
	
	<input class="input-left" type="text" name='cpnum' placeholder="Passport number" required value="">
									
								<button type='submit' name='submit'>Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</form>
							
						</div>
<script type='text/javascript'>
function printDiv() {
     var printContents = document.getElementById('printdiv').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();
	 return false;

     document.body.innerHTML = originalContents;
}

</script>

<?php
if(isset($_POST['submit']))
{
$cpnum=$_POST['cpnum'];
$cformid=$_POST['cformid'];
$cname=$_POST['cname'];
$cmail=$_POST['cmail'];
$cphone=$_POST['cphone'];
$cgrade=$_POST['cgrade'];
$ccity=$_POST['ccity'];

$caddr=$_POST['caddr'];
$cphoto=$_FILES['cphoto']['name'];
move_uploaded_file($_FILES['uphoto']['tmp_name'],"upload/$uphoto");

$q=mysql_query("select * from cform where cpnum='$cpnum'");
$c=mysql_num_rows($q);
if($c>0)
{
echo "<script type='text/javascript'>alert('CFORM already aded');</script>";
}
else
{
$q=mysql_query("select * from central where pnum='$cpnum'");
$c=mysql_num_rows($q);
if($c>0)
{
?>

				<section id="printdiv">
				<?php
echo "<table align='left' cellpadding='10' cellsapcing='0' border='1' width='100%'>
<tr><td>Photo</td><td><img src='upload/$cphoto' height='200px'/></td></tr>
<tr><td>C-FORMID</td><td>$cformid</td></tr>
<tr><td>Name</td><td>$cname</td></tr>
<tr><td>Mail Id</td><td>$cmail</td></tr>
<tr><td>Phone</td><td>$cphone</td></tr>
<tr><td>Grade</td><td>$cgrade</td></tr>
<tr><td>City</td><td>$ccity</td></tr>
<tr><td>Address</td><td>$caddr</td></tr>
</table>";

?>
</section>
<input type='button' value="Print" onclick="printDiv()">
<?php


mysql_query("insert into cform(cpnum,cformid,cname,cmail,cphone,cgrade,ccity,cstate,caddr,cphoto)values('$cpnum','$cformid','$cname','$cmail','$cphone','$cgrade','$ccity','$cstate','$caddr','$cphoto')");
echo "<script type='text/javascript'>alert('Cform added');</script>";
}
else
{
echo "<script type='text/javascript'>alert('Passport number not available');</script>";
}
}



}
?>
						
					</div>
					
			</section>

						</div>

                        
					</div>
					
				</div>
			</section>
			
		</div>
<?php include("footer.php"); ?>