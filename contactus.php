<?php include("header.php"); ?>
<div class="kf-home-banner inner-banner">
			<div class="container">
				
				<span><i class="icon-hotel"></i></span>
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
        
<div class="kf_content_wrap">
<section class="contactus-wrap">
				<div class="container">
					<div class="kf-cont-heading">
						<h5>Get In Touch</h5>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-6">
							<form>
								<div class="kf-contact-des">
									<input class="input-left" type="text" name='name' placeholder="Name" required >
									<input class="input-right" type="text" name='email' placeholder="E-mail" required >
								</div>
<input type="text" name='phone' placeholder="Phone" required >

								<input type="text" placeholder="Subject" name='subject' required>
								<textarea placeholder="Message" name='message' required></textarea>
								<button type='submit' name='submit'>Send Message</button>
							</form>
						</div>

<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$mobile=$_POST['mobile'];

$to = "info@zuuzuuholidays.com";
$subject = "Industrial Tour Package Enquiry";
$message="<table cellpadding='20' cellspacing='0' border='0' style='width:50%; text-align:center; background-color:#f6800d;'>
    <tr><td><img src='http://zuuzuuholidays.com/images/logo.png'></td></tr>
</table>
<table cellpadding='20' cellspacing='0' border='0' style='background-color:#282a2a; color:#fff; width:50%; text-align:center; width:50%; font-size:14px; font-family: Trebuchet MS'>
<tr><td>Name</td><td>$name</td></tr>
<tr><td>Phone</td><td>$phone</td></tr>
<tr><td>Email</td><td>$email</td></tr>
<tr><td>Mobile</td><td>$mobile</td></tr>
<tr><td>Subject</td><td>$subject</td></tr>
<tr><td>Message</td><td>$message</td></tr>
</table>
<table cellpadding='20' cellspacing='0' border='0' style='width:50%; text-align:center; background-color:#f6800d; color:#fff'>
    <tr><td>Save Green Save India <br/> Call us at 9952413566, 8870170167</td></tr>
</table>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@zuuzuuholidays.com>' . "\r\n";


if(mail($to,$subject,$message,$headers))
{
echo "<script type='text/javascript'>alert('Mail sent successfully');</script>";
}
else
{
echo "<script type='text/javascript'>alert('Mail not sent');</script>";
}

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@zuuzuuholidays.com>' . "\r\n";

$to1 = "$email";

$subject = "Customized Tour Package Enquiry";

$message1="<table cellpadding='20' cellspacing='0' border='0' style='width:50%; text-align:center; background-color:#f6800d;'>
    <tr><td><img src='http://zuuzuuholidays.com/images/logo.png'></td></tr>
</table>
<table cellpadding='20' cellspacing='0' border='0' style='background-color:#282a2a; color:#fff; width:50%; text-align:center; width:50%; font-size:14px; font-family: Trebuchet MS'>
<tr><td>Thank you $name, for contacting ZuuZuu Holidays, we will get back to you soon</td></tr>
</table>
<table cellpadding='20' cellspacing='0' border='0' style='width:50%; text-align:center; background-color:#f6800d; color:#fff'>
    <tr><td>Save Green Save India <br/> Call us at 9952413566, 8870170167</td></tr>
</table>
";

mail($to1,$subject,$message1,$headers);


}
?>
						<div class="col-md-4 col-sm-6">
							<ul class="kf-cnt">
								<li>
									<i class="icon-tool"></i>
									<div class="overflow-contac">
										<p>63 Muthunagar, Thudiyalur, Coimbatore</p>
									</div>
								</li>
								<li>
									<i class="icon-interface"></i>
									<div class="overflow-contac">
										<a href="mailto:info@zuuzuuholidays.com" style="padding-top:20px;">info@zuuzuuholidays.com</a>
									</div>
								</li>
								<li>
									<i class="icon-telephone"></i>
									<div class="overflow-contac">
										<em style="padding-top:20px;">9952413566, 8870170167</em>
									</div>
								</li>
							</ul>
						</div>
					</div>
					
				</div>
			</section>
			<div class="kf-contact-map">
				<div id="map-canvas" class="map-canvas"></div>
			</div>
<div class="clear"></div>
<br/>
<?php include("footer.php"); ?>