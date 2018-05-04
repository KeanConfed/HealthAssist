<!DOCTYPE html>
<HTML>
<!--
CP340 - Experiential Learning Project
Thunder Bay IT : (Emmett Parker & Stephen Kean)
HealthAssist Web-Application 
April 24, 2018
-->

<!--search.html page -->

<HEAD>
	<meta charset="UTF-8">
	<TITLE> Search </TITLE>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">	</script>
	
	<link rel="stylesheet" type="text/css" href="style.css">	
</HEAD>

<BODY>
	<!--greeting header-->
	<div class="header">
		<H1>Welcome to HealthAssist!</H1>	
		<h4>Search for a doctor with a specialization</h4>
	</div>	

	<form method="post" action="results.php">
  	<?php include('errors.php'); ?>

<p id="p_looking">I'm looking for a Doctor Specializing in:</p><br/>

  	<div id ='search_special'>
					<select id ='r_spselect' name="specialization" text-align="center"> 
						<option value="Anatomical pathology">Anatomical pathology</option>
						<option value="Anesthesiology">Anesthesiology</option>
						<option value="Cardiology">Cardiology</option>
						<option value="Cardiovascular/thoracic surgery">Cardiovascular/thoracic surgery</option>
						<option value="Clinical immunology/allergy">Clinical immunology/allergy</option>
						<option value="Dermatology">Dermatology</option>
						<option value="Diagnostic radiology">Diagnostic radiology</option>
						<option value="Emergency medicine">Emergency medicine</option>
						<option value="Endocrinology/metabolism">Endocrinology/metabolism</option>
						<option value="Family medicine">Family medicine</option>
						<option value="Gastroenterology">Gastroenterology</option>
						<option value="General Internal Medicine">General Internal Medicine</option>
						<option value="General/clinical pathology">General/clinical pathology</option>
						<option value="General surgery">General surgery</option>
						<option value="Geriatric medicine">Geriatric medicine</option>
						<option value="Hematology">Hematology</option>
						<option value="Medical biochemistry">Medical biochemistry</option>
						<option value="Medical genetics">Medical genetics</option>
						<option value="Medical oncology">Medical oncology</option>
						<option value="Medical microbiology and infectious diseases">Medical microbiology and infectious diseases</option>
						<option value="Nephrology">Nephrology</option>
						<option value="Neurology">Neurology</option>
						<option value="Neurosurgery">Neurosurgery</option>
						<option value="Nuclear medicine">Nuclear medicine</option>
						<option value="Obstetrics/gynecology">Obstetrics/gynecology</option>
						<option value="Occupational medicine">Occupational medicine</option>
						<option value="Ophthalmology">Ophthalmology</option>
						<option value="Orthopedic Surgery">Orthopedic Surgery</option>
						<option value="Otolaryngology">Otolaryngology</option>
						<option value="Pediatrics">Pediatrics</option>
						<option value="Physical medicine and rehabilitation">Physical medicine and rehabilitation</option>
						<option value="Plastic surgery">Plastic surgery</option>
						<option value="Psychiatry">Psychiatry</option>
						<option value="Public health and preventive medicine">Public health and preventive medicine</option>
						<option value="Radiation oncology">Radiation oncology</option>
						<option value="Respiratory medicine/respirology">Respiratory medicine/respirology</option>
						<option value="Rheumatology">Rheumatology</option>
						<option value="Urology">Urology</option>
					</select>
				
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="search">Search</button>
  	</div>
  </form>
</BODY>

</HTML>