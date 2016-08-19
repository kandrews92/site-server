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

			<hr width="90%" align="left">

			<h4>Wayne State University</h4>
			<table class="table" width="90%" style="padding-left:25px;">
			<tr>
				<td>Autumn 2016</td>
				<td>General Physics II, Teaching Assistant</td>
				<td>[<a style="color:#ffff66;text-decoration:none;" href="../docs/teach/phy2140_fall2016.pdf" download><img src="../imgs/icons/pdflogo.png" alt="pdf download logo" height="10" width="10">Syllabus</a>]</td>
			</tr>
			<tr>
				<td>Summer 2016</td>
				<td>General Physics I, Teaching Assistant</td>
				<td>[<a style="color:#ffff66;text-decoration:none;" href="../docs/teach/phy2130_summer2016.pdf" download><img src="../imgs/icons/pdflogo.png" alt="pdf download logo" height="10" width="10">Syllabus</a>]</td>
			</tr>
			<tr>
				<td>Autumn 2015</td>
				<td>General Physics I, Teaching Assistant</td>
				<td>[<a style="color:#ffff66;text-decoration:none;" href="../docs/teach/phy2130_fall2015.pdf" download><img src="../imgs/icons/pdflogo.png" alt="pdf download logo" height="10" width="10">Syllabus</a>]</td>
			<tr>
				<td>Summer 2015</td>
				<td>General Physics Laboratory I, Laboratory Instructor</td>
				<td>[<a style="color:#ffff66;text-decoration:none;" href="../docs/teach/phy2131_summer2015.pdf" download><img src="../imgs/icons/pdflogo.png" alt="pdf download logo" height="10" width="10">Syllabus</a>]</td>
			</tr>
			<tr>
				<td>Winter 2015</td>
				<td>Conceptual Physics, Laboratory Instructor</td>
				<td>[<a style="color:#ffff66;text-decoration:none;" href="http://www.bulletins.wayne.edu/ubk-output/index.html">Course Description</a>]</td>
			</tr>
			<tr>
				<td>Winter 2015</td>
				<td>Descriptive Astronomy Laboratory I, Laboratory Instructor</td>
				<td>[<a style="color:#ffff66;text-decoration:none;" href="../docs/teach/ast2011_winter2015.pdf" download><img src="../imgs/icons/pdflogo.png" alt="pdf download logo" height="10" width="10">Syllabus</a>]</td>
			</tr>
			<tr> 
				<td>Autumn 2014</td>
				<td>Descriptive Astronomy Laboratory I, Laboratory Instructor</td>
				<td>[<a style="color:#ffff66;text-decoration:none;" href="../docs/teach/ast2011_fall2014.pdf" download><img src="../imgs/icons/pdflogo.png" alt="pdf download logo" height="10" width="10">Syllabus</a>]</td>
			</tr>
			</table>

			<h4>Michigan State University</h4>
			<table class="table" width="90%" style="padding-left:25px;">
			<tr>
				<td>Winter 2014</td>
				<td>Introductory Physics II, Teaching Assistant</td>
				<td>[<a style="color:#ffff66;text-decoration:none;" href="https://reg.msu.edu/Courses/Request.aspx?Term=1136&SubjectCode=PHY&CourseNumber232">Course Description</a>]</td>
			</tr>
			<tr>
				<td>Autumn 2013</td>
				<td>Planets and Telescopes, Laboratory Instructor</td>
				<td>[<a style="color:#ffff66;text-decoration:none;" href="https://reg.msu.edu/Courses/Request.aspx?Term=1134&SubjectCode=AST&CourseNumber=208">Course Description</a>]</td>
			</tr>
			<tr>
				<td>Winter 2013</td>
				<td>Introductory Physics I, Teaching Assistant</td>
				<td>[<a style="color:#ffff66;text-decoration:none;" href="https://reg.msu.edu/Courses/Request.aspx?Term=1132&SubjectCode=PHY&CourseNumber=231">Course Description</a>]</td>
			</tr>
			<tr>
				<td>Winter 2012</td>
				<td>Introductory Physics II, Teaching Assistant</td>
				<td>[<a style="color:#ffff66;text-decoration:none;" href="https://reg.msu.edu/Courses/Request.aspx?Term=1122&SubjectCode=PHY&CourseNumber=232">Course Description</a>]</td>
			<tr>
			</table>

			<hr align="left">

			<?php include("teach.php"); ?>
		</div>
</body>
</html>
