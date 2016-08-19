<!DOCTYPE html>

<html>
	<head>
		<?php 
			$page_title = "University Courses";
			$page_description = "List of University Courses";
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
			<h2>University Courses</h2>
			<h3>Kraig Andrews</h3>

		<hr align="left">

			<?php include("../includes/teach.php"); ?>

		<hr align="left">
		</div>
</body>
</html>
