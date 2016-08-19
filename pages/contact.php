<!DOCTYPE html>

<html>
	<head>
		<?php 
			$page_title = "Contact Information";
			$page_description = "";
			include("../includes/header.php");
		?>
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
	</head>
<body>	
	<div id="container">
		<div id="left">
			<?php include("../includes/nav.php"); ?>
		</div>
		
		<div id="right">
			<h2>Contact Information</h2>
			<h3>Kraig Andrews</h3>

			<hr width="90%" align="left">

<!--			<img src="../imgs/contact/physics_bldg.jpg" alt="Wayne State Physics Department Building" height="150" width="200" style="float:right;margin-right:0px; padding-right:85px;"> -->
		<!--	<p style="padding-left:25px;">Physics and Astronomy Department<br>666 West Hancock<br>Room 135 Physics Building<br>Wayne State University<br>Detroit, MI 48201<br>USA</p> -->

			<p style="padding-left:25px;"><?php include("../includes/info.php"); ?></p>
					
			<hr align="left">			
		</div>
</body>
</html>
