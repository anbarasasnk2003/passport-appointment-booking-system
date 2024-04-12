<?php include("config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SMART FRRO SYSTEM</title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Full Calender CSS -->
	<link href="css/fullcalendar.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<!-- Pretty Photo CSS -->
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<!-- Bx-Slider StyleSheet CSS -->
	<link href="css/jquery.bxslider.css" rel="stylesheet"> 
	<!-- Font Awesome StyleSheet CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- SVG StyleSheet CSS -->
	<link href="svg/style.css" rel="stylesheet">
	<!-- Widget CSS -->
	<link href="css/widget.css" rel="stylesheet">
	<!-- Typography CSS -->
	<link href="css/typography.css" rel="stylesheet">
	<!-- Shortcodes CSS -->
	<link href="css/shortcodes.css" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
	<link href="style.css" rel="stylesheet">
	<!-- Color CSS -->
	<link href="css/color.css" rel="stylesheet">
	<!-- DATE PICKER CSS -->
	<link href="css/datepicker.css" rel="stylesheet">
	<!-- Effects CSS -->
	<link href="css/effects.css" rel="stylesheet">
	<!-- Slectric CSS -->
	<link href="css/selectric.css" rel="stylesheet">
	<!-- DL Menu CSS -->
	<link href="js/dl-menu/component.css" rel="stylesheet">
	<!-- Responsive CSS -->
	<link href="css/responsive.css" rel="stylesheet">
<script type='text/javascript'>

$(document).ready(function() {
  var owl = $('#owl-demo-6');
  owl.owlCarousel({
    margin: 10,
    nav: true,
    loop: true,
    items: 2
  })
})

});
</script>
</head>
<body onload="myFunction()">


	<!--KF KODE WRAPPER WRAP START-->
    <div class="kode_wrapper">
       
    	<!--HEADER START-->
    	<header>
    		<!--KF HOTEL TOP BAR START-->
    		
			<!--KF HOTEL TOP BAR END-->
			<!--KF HOTEL NAVIGATION BAR START-->
			<div class="kf-navigation-wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-2">
							<!--KF HOTEL LOGO START-->
							<div class="kf-logo">
								<a href="index.php"><img src="images/logo.png" alt="" height="100px"></a>
							</div>
							<!--KF HOTEL LOGO END-->
						</div>
						<div class="col-md-9 col-sm-10">
							<!--KF HOTEL NAV START-->
							<div class="kf-nav">
								<div  id="nav-main">
									<ul>
										<li><a href="index.php"><i class="fa fa-home"></i> home</a></li>
									
									<?php
									if($_SESSION['frid']!='')
									{
									?>
									<li><a href=""><i class="fa fa-group (alias)"></i> About us</a></li>
									<li><a href=""><i class="fa fa-group (alias)"></i> Support</a></li>
									<li><a href="sos.php" style="color:#000;"><i class="fa fa-group (alias)"></i> SOS</a></li>
									<?php
									}
									else
									{
									?>
										<li><a href="foreigner-login.php"><i class="fa fa-group (alias)"></i> Foreigner</a></li>
										<li><a href="accomodator-login.php"><i class="fa fa-group (alias)"></i> Accomodator</a></li>
										<li><a href="frro-login.php"><i class="fa fa-group (alias)"></i> FRRO</a></li>
										<li><a href="police-login.php"><i class="fa fa-group (alias)"></i> Police</a></li>
										<?php
										}
										?>
									</ul>
									<!--Responsive Menu END-->
				                    <div id="nav-trigger">



									</div>
								</div>

							</div>
							<!--KF HOTEL NAV END-->
						</div>
					</div>
				</div>
			</div>
			<!--KF HOTEL NAVIGATION BAR END-->
		</header>
		<!--HEADER END-->

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
						
						if($_GET['action']=='mail')
						{
						$g=mysql_query("select * from new_applicants where pnum='$pnum'");
						while($h=mysql_fetch_array($g))
						{
						$uemail=$h['uemail'];
						$ucity=$_SESSION['ucity'];
						$uname=$_SESSION['uname']
						mail("police@smartfrro.in","Alert Message from $uname","Please contact me immediately. Im in $ucity")
						echo "<script type='text/javascript'>alert('Alert sent to Police and FRRO');</script>";
						
							}
							}
							?>
						</div>

<?php

?>
						
					</div>
					
			</section>
							<!--BLOG LIST END-->

							
						
						</div>

                        
					</div>
					
				</div>
			</section>
			
		</div>
<script type="text/javascript">
function myFunction() {
   var redirect = confirm("Do you really want to alert police and FRRO");
   if (redirect == true) {
       window.location.href = 'sos.php?action=mail'; //redirect to http://www.xyz.com.
   }
}
</script>

<?php include("footer.php"); ?>