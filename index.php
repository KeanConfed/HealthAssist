<?php include('server.php') ?>
<!DOCTYPE html>
<HTML>
<!--
CP340 - Experiential Learning Project
Thunder Bay IT : (Emmett Parker & Stephen Kean)
HealthAssist Web-Application 
April 24, 2018
-->

<!--index.html page -->

<HEAD>
	<meta charset="UTF-8">
	<TITLE> Entry </TITLE>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">	</script>
	
	<link rel="stylesheet" type="text/css" href="style.css">	
</HEAD>

<BODY>
	<!--greeting header-->
	<div class="header">
		<H1>Welcome to HealthAssist!</H1>	
		<h4>Please click the option that applies to you!</h4>
	</div>	

	<div class="content">
		<!-- contains 2 buttons I am a Patient and I am a Doctor-->
		<div class="input-group">
		
			<!--<Patient Button brings to search page -->
			<a href="search.php" class ='btn' id='btnIPat'>I am a Patient</a>
				
			<!--Doctor Button brings to doctor page-->
			<a href="doctor.php" class='btn' id='btnIDoc'>I am a Doctor</a>
		</div><!-- end of div button-panel -->
	</div><!-- end of main -->


	
</BODY>

</HTML>

