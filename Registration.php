<?php
session_start();
?>
<!DOCTYPE html>
<HTML>
<!--
CP340 - Experiential Learning Project
Thunder Bay IT : (Emmett Parker & Stephen Kean)
HealthAssist Web-Application 
April 24, 2018
-->

<!--Registration.html page -->

<HEAD>
	<meta charset="UTF-8">
	<TITLE> Registration </TITLE>
	<style>
	h1 {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">	</script>
	
	
  <link rel="stylesheet" type="text/css" href="style.css">
</HEAD>

<BODY>
	
	<div id='greet'><br>
	<H1>Registration</H1>
	</div>

	<div class="main">
	
	<div class="button-panel">
	
	<form action="Pass.php" method="post">
		
		<table id='treg'>
		<tr>
				<td>
					<input type="text" name="Error" value="<?php echo $_SESSION['Error']; ?>" readonly> 
				</td>
				
			</tr>
			
			<tr>
				<td>
					<label for="fname">First Name</label> 
				</td>
				<td>
					<input type="text"  name="fname">
				</td>
			</tr>
				
			<tr>
				<td>
					<label for="lname">Last Name</label> 
				</td>
				<td>
					<input type="text" name="lname">
				</td>
			</tr>

			<tr>
				<td>
					<label for="email">Email (Username)</label>
				</td>
				<td>
					<input type="email"  name="email">
				</td>				
			</tr>
			
			<tr>
				<td>
					<label for="email2">Re enter Email (Username)</label>
				</td>
				<td>
					<input type="email"  name="email2">
				</td>				
			</tr>
			
			<tr>
				<td>
					<label for='password'>Password</label>
				</td>
				<td>
					<input type="password"  name="password">
				</td>
			</tr>
			<tr>
				<td>
					<label for='password2'>Reenter Password</label>
				</td>
				<td>
					<input type="password"  name="password2">
				</td>
			</tr>
			
			<tr>
				<td>
					<label for='address'>Clinic Address </label>
				</td>
				<td>
					<input type="text"  name="address">
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="phone">Clinic phone# </label>
				</td>
				<td>
					<input type="text"  name="phone">
				</td>
			</tr>
			
			<tr>				
				<td>
					<label for="gender">Gender</label>
				</td>
					
				<td>
					<select name='gender'>
						<option value="Male">Male(M)</option>
						<option value="Female">Female(F)</option>
						<option value="other">Other(O)</option>
					</select>
					
				</td>
			</tr>			
			<tr>
				<td>
					<label for="Specialization">Specialization</label>
				</td>
				<td>
					<select name='Specialization'> 
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
				</td>
			</tr>
						
		</table>
		<input type="submit" name="submit" value="Register">
			
	</form>			
			
			
	</div>
	</div>
	
</BODY>

</HTML>