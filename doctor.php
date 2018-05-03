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
	<TITLE> Doctors </TITLE>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">	</script>
	
	<link rel="stylesheet" type="text/css" href="style.css">	
</HEAD>

<BODY>
	<!--greeting header-->
	<div class="header">
		<H1>HealthAssist</H1>	
		<h4>Please sign-in or register</h4>
	</div>	

	<div class="content">
		<!-- contains 2 buttons I am a Patient and I am a Doctor-->
		<div class="input-group">
		
			<!--<Patient Button brings to search page -->
			<a href="login.php" class ='btn' id='btnLogin'>Login</a>
				
			<!--Doctor Button brings to doctor page-->
			<a href="signup.php" class='btn' id='btnRegister'>Sign-Up</a>
		</div><!-- end of div button-panel -->
	</div><!-- end of main -->


	
</BODY>

</HTML>