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
							Enter <br/>
							<select name="estatus">
							<option value="">Select Status</option>
							<option value="start">Start</option>
							<option value="end">End</option>
							</select><br/>
							
							Date:<br/>
					<input class="input-left" type="text" name='edate'   value="" placeholder="yyyy-mm-dd" ><br/>
					<button type='submit' name='submit'>Filter</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
					
					<br/><br/>Status<br/>
							<select name="country">
							<option value="">Select Status</option>
							<option value="yes">Left</option>
							<option value="no">Not Left</option>
							</select><br/>
							
							<button type='submit' name='submit'>Filter</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/><br/><br/>
								<br/>Enter Nationality<br/>
							<select name="nationality">
							<option value="">Select Nationality</option>
							<option value="american">American</option>
							<option value="african">African</option>
							<option value="australian">Australian</option>
							</select><br/>
							
					
									
								<button type='submit' name='submit'>Filter</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
							</form>
							</div>	
							
					
						

<?php
if(isset($_POST['submit']))
{
$edate=$_POST['edate'];
$estatus=$_POST['estatus'];

$country=$_POST['country'];

$nationality=$_POST['nationality'];
echo '<table align="left" cellpadding="10" cellspacing="0" border="1" width="100%" class="tbl">';
if($estatus!='')
{
if($estatus=='start')
{
$j=mysql_query("select * from new_applicants where vsdate>$edate");
}
if($estatus=='end')
{
$j=mysql_query("select * from new_applicants where vedate>$edate");
}


echo "<tr><td>First Name</td><td>Passport number</td><td>Visa number</td><td>Visa start date</td><td>Visa end date</td><td>Visa type</td><td>Phone number</td><td>Email Id</td><td>C-Form Id</td><td>Nationality</td><td>Address</td><td>City</td><td>View Cform</td></tr>";
}
else if($country!='')
{
$j=mysql_query("select * from central where sleft='$country'");
echo "<tr><td>First Name</td><td>Passport number</td><td>Visa number</td><td>Visa start date</td><td>Visa end date</td><td>Visa type</td><td>Phone number</td><td>Email Id</td><td>Nationality</td></tr>";
while($r=mysql_fetch_array($j))
{
$fcname=$r['fcname'];
$pnum=$r['pnum'];
$vnum=$r['vnum'];
$vsdate=$r['vsdate'];
$vedate=$r['vedate'];
$nationality=$r['nationality'];
$phone=$r['phone'];
$vtype=$r['vtype'];
/*$=$r[''];
$=$r[''];
*/
$cformid=$r['cformid'];
$city=$r['city'];
$nationality=$r['nationality'];


$fname=$r['fcname'];
$uemail=$r['email'];
$uphone=$r['phone'];
$pnum=$r['pnum'];
$addr=$r['addr'];
$cfile=$r['cfile'];

echo "<tr><td>$fname</td><td>$pnum</td><td>$vnum</td><td>$vsdate</td><td>$vedate</td><td>$vtype</td><td>$uphone</td><td>$uemail</td><td>$nationality</td></tr>";

}
}

else if($nationality!='')
{
$j=mysql_query("select * from new_applicants where nationality='$nationality'");
echo "<tr><td>First Name</td><td>Passport number</td><td>Visa number</td><td>Visa start date</td><td>Visa end date</td><td>Visa type</td><td>Phone number</td><td>Email Id</td><td>C-Form Id</td><td>Nationality</td><td>City</td><td>Address</td><td>View Cform</td></tr>";
}
if(($estatus!='')||($nationality!=''))
while($r=mysql_fetch_array($j))
{
$fcname=$r['fcname'];
$pnum=$r['pnum'];
$vnum=$r['vnum'];
$vsdate=$r['vsdate'];
$vedate=$r['vedate'];
$nationality=$r['nationality'];
$phone=$r['phone'];
$addr=$r['addr'];
/*$=$r[''];
$=$r[''];
*/
$cformid=$r['cformid'];
$city=$r['city'];
$nationality=$r['nationality'];


$fname=$r['fcname'];
$uemail=$r['email'];
$uphone=$r['phone'];
$pnum=$r['pnum'];
$cfile=$r['cfile'];

echo "<tr><td>$fname</td><td>$pnum</td><td>$vnum</td><td>$vsdate</td><td>$vedate</td><td>$vtype</td><td>$uphone</td><td>$uemail</td><td>$cformid</td><td>$nationality</td><td>$city</td><td>$addr</td><td><a href='view-cform.php?cpnum=$pnum' target='_blank'>View</a></td></tr>";

}
?>

<?php
echo '</table>';

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