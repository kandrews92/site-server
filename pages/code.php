<!DOCTYPE html>

<html>
	<head>
		<?php 
			$page_title = "Code Listings";
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
			<h2>Code Listings</h2>
			<h3>Kraig Andrews</h3>
			
			<hr width="100%" align="left">

			<p>Below are some possibly useful of snippets of code, cheatsheets, and documentation that I've developed and <br>acculumated from various places over the years. Feel free to use and edit as you see fit. If you notice any mistakes or <br>bugs please <a style="color:#ffff66;" href="contact.php">contact me</a>.</p>

			<p style="padding-left:25px;">On This Page: <a style="color:#ffff66;text-decoration:none;" href="#shell">[<code>shell</code>]</a> &nbsp; <a style="color:#ffff66;text-decoration:none;" href="#python">[<code>python</code>]</a> &nbsp; <a style="color:#ffff66;text-decoration:none;" href="#c++">[<code>c++</code>]</a> &nbsp; <a style="color:#ffff66;text-decoration:none;" href="#fortran">[<code>fortran</code>]</a> &nbsp <a style="color:#ffff66;text-decoration:none;" href="#latex">[<code>latex</code>]</a></p>

			<hr width="100%" align="left">

			<h4><a style="color:#fffff6;text-decoration:none;" name="shell">Shell/Bash Script</a></h4>
			<table class="table" width="90%" style="padding-left:25px;">
			<tr>
				<td>Script <code>mk</code> is a bash script that can be used to run and re-run the <code>pdflatex</code> command and the <code>bibtex</code> command. Place the file in the desired path (preferably in the same directory as the <code>.tex</code> file) and then use <code>./mk</code> to run the script.</td>
			</tr>
			<tr>
				<td style="padding-left:25px;"><b>Download</b>: <a style="color:#fffff6;text-decoration:none;" href="../code/shell/mk" download><code>mk</code></a></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
			<tr>
				<td>Script <code>backup</code> that allows user to backup a specific directory or path to a server. To use you may need to become root (i.e. <code>sudo su</code>) and then run <code>chmod +x <q>script name</q></code> (to make it executable) and then move the script to <code>/bin/</code> so that it can be used as a command. To be used for specific use, edit the username to fit your specific username on the external server, edit the servername and edi the password accordingly. Optional edits can be made to change the soure directory target to refect the folder(s) to be backed-up. Adding to crontab by running <code>crontab -e</code> in the <code>/home/user/</code> path and set the appropriate time that you would like to run it. (<i>Script created in collaboration with Kevin Andrews</i>)
				</td>
			</tr>
			<tr>
				<td style="padding-left:25px;"><b>Download</b>: <a style="color:#fffff6;text-decoration:none;" href="../code/shell/backup" download><code>backup</code></a></td>
			</table>
			
			<hr width="100%" align="left">

			<h4><a style="color:#fffff6;text-decoration:none;" name="python">Python</a></h4>	
			<table class="table" width="90%" style="padding-left:25px;">
			<tr>
				<td>Class <code>inexact_float.py</code>, used to cmopare to floating point variables. Checks for equality within a user-defined threshold value.</td>
			</tr>
			<tr>
				<td style="padding-left:25px;"><b>Download</b>: <a style="color:#fffff6;text-decoration:none;" href="../code/python/inexact_float.py" download><code>inexact_float.py</code></a></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Program <code>excel_extract.py</code>, extracts data from an Excel spreadsheet and puts the data into an array. Program requires package <code>xlrd</code>. To get package, run command <code>sudo pip install xlrd</code>.</td>
			</tr>
			<tr>
				<td style="padding-left:25px;"><b>Download</b>: <a style="color:#fffff6;text-decoration:none;" href="../code/python/excel_extract.py" download><code>excel_extract.py</code></a></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Program <code>file_list.py</code>, searches current path where program is located and list files with the specified file extension (i.e. <code>.xls</code> or <code>.xlsx</code>). Allows user to choose from list of files and returns file number and name.</td>
			</tr>
			<tr>
				<td style="padding-left:25px;"><b>Download</b>: <a style="color:#fffff6;text-decoration:none;" href="../code/python/file_list.py" download><code>file_list.py</code></a></td>
			</tr>
			</table>

			<hr width="100%" align="left">

			<h4><a style="color:#fffff6;text-decoration:none;" name="c++">C++</a></h4>
			<table class="table" width="90%" style="padding-left:25px;">
			<tr>
				<td>Below is <code>.tar</code> that contains both a <code>Makefile</code> and a <code>.cpp</code> file named <code>main.cpp</code>. The <code>Makefile</code> is a generic one that links the <code>plplot</code> package correctly (plplot needs to be <a style="color:#ffff66;" href="http://plplot.sourceforge.net/">downloaded</a> first) and links the appropriate dependencies and creates a file <code>main.exe</code> which can be run via the command <code>./main.exe</code>. The file <code>main.cpp</code> runs an example of a plotting script of a function that is defined within the program. Output can be chosen via user-input to various formats.</td>
			</tr>
			<tr>
				<td style="padding-left:25px;"><b>Download</b>: <a style="color:#fffff6;text-decoration:none;" href="../code/c++/plplot_example.tar" download><code>plplot_example.tar</code></a></td>
			</tr>
			<tr>
				<td style="padding-left:25px;"><b>Download</b>: <a style="color:#fffff6;text-decoration:none;" href="../code/c++/makefile" download><code>Makefile</code></a></td>
			</tr>
			<tr>
				<td style="padding-left:25px;"><b>Download</b>: <a style="color:#fffff6;text-decoration:none;" href="../code/c++/main.exe" download><code>main.cpp</code></a></td>
			</tr>
			</table>			

			<hr width="100%" align="left">

			<h4><a style="color:#fffff6;text-decoration:none;" name="fortran">Fortran</a></h4>
			<table class="table" width="90%" style="padding-left:25px;">
			<tr>
				<td>Below is <code>polymer.tar</code>. This contains a <code>Makefile</code> that resolves dependencies for the file <code>Poly3D.f95</code>. To complie <code>plplot</code> is needed (plplot needs to be <a style="color:#ffff66;">downloaded</a> first). <code>plplot</code> allows for the visualization of a simple 3D polymer. The polymer created is modeled using a Lennard-Jones potential with the bond angle chosen at random. Then the polymer chain is built through a Monte Carlo accept/reject method using the Partition Function of the system. Making the file and running the executable will show the visualization of a 3D polymer chain. This code can be expanded upon, if desired, by adding a bonding potential term and a Coulomb potential term into the calculations. (<i>Code created in collaboration with Daniel Woolridge</i>)</td>
			</tr>
			<tr>
				<td style="padding-left:25px;"><b>Download</b>: <a style="color:#fffff6;text-decoration:none;" href="../code/fortran/polymer.tar" download><code>polymer.tar</code></a></td>
			</table>

			<hr width="100%" align="left">

			<h4><a style="color:#fffff6;text-decoration:none;" name="latex">LaTex</a></h4>
			<table class="table" width="90%" style="padding-left:25px;">
			<tr>
				<td>Below is <code>beamer_example.tar</code>. This contains <code>presentation.tex</code> and <code>presentation.pdf</code>. <code>presentation.tex</code> uses the beamer LaTex class (<a style="color:#ffff66;" href="http://mirror.jmu.edu/pub/CTAN/macros/latex/contrib/beamer/doc/beameruserguide.pdf">documentation</a>) to generate a PowerPoint style presentation. This allows for direct use of the LaTeX math environment and incorporation of figures (and much more).</td>
			</tr>
			<tr>
				<td style="padding-left:25px;"><b>Download</b>: <a style="color:#fffff6;text-decoration:none;" href="../code/latex/beamer_example.tar" download><code>beamer_example.tar</code></a></td>
			</tr>
			<tr>
				<td style="padding-left:25px;"><b>Download</b>: <a style="color:#fffff6;text-decoration:none;" href="../code/latex/Present_temp.tex" download><code>presentation.tex</code></a></td>
			</tr>
			<tr>
				<td style="padding-left:25px;"><b>Download</b>: <a style="color:#fffff6;text-decoration:none;" href="../code/latex/Present_temp.pdf" download><code>presentation.pdf</code></a></td>
			</table>

			<hr width="100%" align="left">

		</div>
</body>
</html>
