<!DOCTYPE html>

<html>
	<head>
		<?php 
			$page_title = "Curriculum Vitae";
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
			<h2>Cirriculum Vitae</h2>
			<p style="padding-left:25px;">(Download cirriculum vitae in <a style="color:white;text-decoration:none;" href="../docs/cv/cv2016.pdf" download><img src="../imgs/icons/pdflogo.png" alt="pdf download logo" height="10" width="10">PDF form</a>)</p>

		<hr align="left">
		<table class="table" style="width:90%;padding-left:25px;">
		<tr>
			<td><a style="color:#ffff66;text-decoration:none;" href="#contact">[contact]</a></td>
			<td><a style="color:#ffff66;text-decoration:none;" href="#interests">[research interests]</a></td>			
			<td><a style="color:#ffff66;text-decoration:none;" href="#education">[education]</a></td>
			<td><a style="color:#ffff66;text-decoration:none;" href="#experience">[experience]</a></td>
			<td><a style="color:#ffff66;text-decoration:none;" href="#publications">[publications]</a></td>
			<td><a style="color:#ffff66;text-decoration:none;" href="#skills">[skills]</a></td>
			<td><a style="color:#ffff66;text-decoration:none;" href="#teaching">[teaching]</a></td>
			<td><a style="color:#ffff66;text-decoration:none;" href="#courses">[graduate courses]</a></td>
		</tr>
		</table>

		<hr align="left">
		
		<h3><a style="color:#fffff6;text-decoration:none;" name="contact">Kraig Andrews</a></h3>
			<?php include("../includes/info.php"); ?>

		<hr align="left">

		<h4><a style="color:#fffff6;text-decoration:none" name="interests">Research Interests</a></h4>
			<?php include("../includes/interests.php"); ?>

		<hr align="left">

		<h4><a style="color:#fffff6;text-decoration:none;" name="education">Education</a></h4>
			<?php include("../includes/education.php"); ?>
	
		<hr align="left">
		
		<h4><a style="color:#fffff6;text-decoration:none;" name="experience">Research Experience</a></h4>
			<?php include("../includes/experience.php"); ?>		

		<hr align="left">

		<h4><a style="color:#fffff6;text-decoration:none;" name="publications">Publications</a></h4>`
		
		<hr align="left">


		<h4><a style="color:#fffff6;text-decoration:none;" name="skills">Relevant Skills</a></h4>
			<?php include("../includes/skills.php"); ?>

		<hr align="left">
	
		<h4><a style="color:#fffff6;text-decoration:none;" name="teaching">Teaching</a></h4>
		
		<p style="padding-left:25px;>
			<?php include("../includes/teach.php"); ?></td>
		</p>

		<hr align="left">

			<?php include("../includes/grad.php"); ?>
		<hr align="left">
	
		</div>
</body>
</html>
