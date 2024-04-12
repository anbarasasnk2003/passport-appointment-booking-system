<?php include("header.php"); ?>
<div class="kf-home-banner inner-banner">
			<div class="container">
				
				<span><i class="icon-hotel"></i></span>
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="">Police Login</a></li>
				</ul>
			</div>
		</div>
        
<div class="kf_content_wrap">
<section class="contactus-wrap">
				<div class="container">
					<div class="kf-cont-heading">
						<h5>Police</h5>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-6">
							<form action="" method="post">
									<input class="input-left" type="text" name='uname' placeholder="Username" required >
									<input class="input-right" type="password" name='upass' placeholder="Password" required >
								<button type='submit' name='submit'>Login</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</form>
						</div>

<?php
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$q=mysql_query("select * from police where pname='$uname' and ppass='$upass'");
$c=mysql_num_rows($q);
if($c>0)
{
while($r=mysql_fetch_array($q))
{
$_SESSION['pid']=$pid=$r['pid'];
$_SESSION['pname']=$pname=$r['pname'];
$_SESSION['pcity']=$pcity=$r['city'];

echo '<meta http-equiv="refresh" content="0;url=view_new_application.php"/>';
//echo '<meta http-equiv="refresh" content="0;url=add_expense.php"/>';
}
}
else
{
echo "<script type='text/javascript'>alert('You are not authorised user');</script>";
}

}
?>
						
					</div>
					
				</div>
			</section>
			
<div class="clear"></div>
<br/>
<?php include("footer.php"); ?>