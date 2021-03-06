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


<!--Profile.html page -->

<HEAD>
	<meta charset="UTF-8">
	<TITLE> Profile </TITLE>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">	</script>
	
	<link rel="stylesheet" type="text/css" href="style.css">	
		

	<!--script to upload a file and set as profile picture-->	
	<script>
		document.getElementById('imageUpload').addEventListener('change', upload, true);
	function upload(){


	   var file = document.getElementById("imageUpload").files[0];
	   var reader = new FileReader();
	   
	   reader.onloadend = function(){
		  document.getElementById('profPic').style.backgroundImage = "url(" + reader.result + ")";	  
	   }
	   
	   if(file){
		  reader.readAsDataURL(file);
		  
		}else{
		}
	}
	</script>

	
</HEAD>

<BODY>
	
	<div class="header">
		<h2>Profile</h2>
	</div>


<form action="Update.php" method="post" enctype="multipart/form-data">
 
	
	
	
	<div class='dProfPic' id='profPic'>	
		
	</div>
	
	<div id='divUpload' class='divUpload'>	
	
		<input id="imageUpload" type="file" multiple="false" accept="image/*" onchange="upload()"
			   name="profile_photo" placeholder="Profile Picture Change/Update" >
 <br/>
<label>Profile Picture Change/Update</label>
		<input type="text" name="Error" value="<?php echo $_SESSION['Error']; ?>" readonly> 
				
	</div>
	
	<br><br/>
	  	<div class="input-group">
  	  <label>firstname</label>
  	  <input type="text" name="fname" value="<?php echo $_SESSION['FirstName']; ?>">
  	</div>

<div class="input-group">
  	  <label>lastname</label>
  	  <input type="text" name="lname" value="<?php echo $_SESSION['LastName']; ?>">
  	</div>

  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $_SESSION['username']; ?>">
  	</div>

<div class="input-group">
  	  <label>Confirm Email</label>
  	  <input type="email" name="email2">
  	</div>


<div class="input-group">
  	  <label>address</label>
  	  <input type="text" name="address" value="<?php echo $_SESSION['Address']; ?>">
  	</div>

<div class="input-group">
  	  <label>phone</label>
  	  <input type="text" name="phone" value="<?php echo $_SESSION['Phone']; ?>">
  	</div>


<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password2">
  	</div>


<div class="input-group">
  	  <label>gender</label>
  	
  	<select name="gender" id='r_gselect' name="gender">
						<option value="Male">Male(M)</option>
						<option value="Female">Female(F)</option>
						<option value="other">Other(O)</option>
					</select>
</div>

<div class="input-group">
  	  <label>specialization</label>
  	
  	<select id ='r_spselect' name="Specialization"> 
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


  	</div>
  	<div class="input-group">
  	  <input type="submit" class="btn" name="submit" value="Update">
  	</div>
  </form>
			
	</div>
	</div>
	
</BODY>

</HTML>