<?php include("header.php"); ?>
<div class="kf-home-banner inner-banner">
			<div class="container">
				
				<span><i class="icon-hotel"></i></span>
				<ul class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="">View Queries </a></li>
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
						<div class="tblcls">
							<?php
if($_SESSION['frid']!='')
{
?>
<table align="left" cellpadding="10" cellspacing="0" border="1" width="100%" class="tbl">
<tr><td>Name</td><td>Aadhar number</td><td>Query</td><td>Description</td><td>Reply</td></tr>
<?php
$q=mysql_query("select * from askqueries");
while($r=mysql_fetch_array($q))
{

$query=$r['aquery'];
$descp=$r['descp'];
$aadhar=$r['aadhar'];
$uname=$r['uname'];
$aqid=$r['aqid'];
$reply=$r['reply'];	

echo "<tr><td>$uname</td><td>$aadhar</td><td>$query</td><td>$descp</td><td>$reply</td></tr>";
}
	?>
	</table>
							
<?php
}
else
{
?>
							
							<table align="left" cellpadding="10" cellspacing="0" border="1" width="100%" class="tbl">
<tr><td>Name</td><td>Aadhar number</td><td>Query</td><td>Description</td><td>Reply</td><td>Action</td></tr>
<?php
$q=mysql_query("select * from askqueries");
while($r=mysql_fetch_array($q))
{

$query=$r['aquery'];
$descp=$r['descp'];
$aadhar=$r['aadhar'];
$uname=$r['uname'];
$aqid=$r['aqid'];
$reply=$r['reply'];	

echo "<tr><td>$uname</td><td>$aadhar</td><td>$query</td><td>$descp</td><td>$reply</td><td><a href='viewqueries.php?aqid=$aqid&action=reply'>Reply</a></td></tr>";
}
	?>
	</table>
							
							
							<?php
}
?>							
							
							
							
							
							
							<br><br>
							<?php
if($_GET['action']=='reply')
						{
	?>
	<form action="" method="post" enctype="multipart/form-data"><br><br>
					<input class="input-left" type="text" name='reply' placeholder="Reply" required value="" >
								
								
								<button type='submit' name='submit'>Ask Query</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</form>
	<?php
	if(isset($_POST['submit']))
{
						$aqid=$_GET['aqid'];
						$reply=$_POST['reply'];
	
	mysql_query("update askqueries set reply='$reply' where aqid='$aqid'");
echo "<script type='text/javascript'>alert('Queries has been replied');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewqueries.php"/>';	
	}
							}
?>
					
							
						</div>
						</div>
						</div>

<?php

?>
						
					</div>
					</div>
				</div>
			</section>
			
<div class="clear"></div>
<br/>
</div>
<?php include("footer.php"); ?>