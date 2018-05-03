<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="signup.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>firstname</label>
  	  <input type="text" name="firstname" value="<?php echo $firstname; ?>">
  	</div>

<div class="input-group">
  	  <label>lastname</label>
  	  <input type="text" name="lastname" value="<?php echo $lastname; ?>">
  	</div>

  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>

<div class="input-group">
  	  <label>Confirm Email</label>
  	  <input type="email" name="email_2" value="<?php echo $email; ?>">
  	</div>


<div class="input-group">
  	  <label>address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>

<div class="input-group">
  	  <label>phone</label>
  	  <input type="text" name="phone" value="<?php echo $phone; ?>">
  	</div>

<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>


<div class="input-group">
  	  <label>gender</label>
  	
  	<select name="gender" id='r_gselect' name="gender" <?php echo $gender; ?>>
						<option value="Male">Male(M)</option>
						<option value="Female">Female(F)</option>
						<option value="other">Other(O)</option>
					</select>
</div>

<div class="input-group">
  	  <label>specialization</label>
  	
  	<select id ='r_spselect' name="specialization"> 
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
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>