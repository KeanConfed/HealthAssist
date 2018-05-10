<?php

session_start();

?>
<!DOCTYPE html>
<html>
<body>
<?php

// initializing variables

$firstname = "";

$lastname = "";



$email    = "";

$address = "";

$phone = "";

$gender = "";

$specialization = "";



$errors = array(); 



// connect to the database

$db = mysqli_connect('localhost', 'root', 'password', 'registration');



// REGISTER USER

if (isset($_POST['reg_user'])) {

  // receive all input values from the form

  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);

  $email = mysqli_real_escape_string($db, $_POST['email']);

  $email_2 = mysqli_real_escape_string($db, $_POST['email_2']);


$lastname = mysqli_real_escape_string($db, $_POST['lastname']);

$address = mysqli_real_escape_string($db, $_POST['address']);

$phone = mysqli_real_escape_string($db, $_POST['phone']);

$gender = mysqli_real_escape_string($db, $_POST['gender']);

$specialization = mysqli_real_escape_string($db, $_POST['specialization']);



  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);



  // form validation: ensure that the form is correctly filled ...

  // by adding (array_push()) corresponding error unto $errors array

  if (empty($firstname)) { array_push($errors, "firstname is required"); }



if (empty($lastname)) { array_push($errors, "lastname is required"); }

if (empty($address)) { array_push($errors, "Clinic address is required"); }

if (empty($phone)) { array_push($errors, "Clinic phone number is required"); }

if (empty($gender)) { array_push($errors, "Gender is required"); }

if (empty($specialization)) { array_push($errors, "Specialization is required"); }



  if (empty($email)) { array_push($errors, "Email is required"); }

 if ($email != $email_2) {

	array_push($errors, "The two emails do not match");

  }

  if (empty($password_1)) { array_push($errors, "Password is required"); }

  if ($password_1 != $password_2) {

	array_push($errors, "The two passwords do not match");

  }



  // first check the database to make sure 

  // a user does not already exist with the same username and/or email

  $user_check_query = "SELECT * FROM users WHERE email='$email'  LIMIT 1";

  $result = mysqli_query($db, $user_check_query);

  $user = mysqli_fetch_assoc($result);

  

  if ($user) { // if user exists

    //if ($user['firstname'] === $firstname) {

     // array_push($errors, "Username already exists");

    //}



    if ($user['email'] === $email) {

      array_push($errors, "email already exists");

    }

  }



  // Finally, register user if there are no errors in the form

  if (count($errors) == 0) {

  	$password = md5($password_1);//encrypt the password before saving in the database



  	$query = "INSERT INTO users (firstname, lastname, email, password, address, phone, gender, specialization, image) 

  			  VALUES('$firstname', '$lastname', '$email', '$password', '$address', '$phone', '$gender', '$specialization', '$image')";

  	mysqli_query($db, $query);

$_SESSION['id'] = $id;
$_SESSION['firstname'] = $firstname;
$_SESSION['lastname'] = $lastname;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['address'] = $address;
$_SESSION['phone'] = $phone;
$_SESSION['gender'] = $gender;
$_SESSION['specialization'] = $specialization;
$_SESSION['image'] = $image;
	

  	

  	header('location: login.php');

  }

}

// LOGIN USER
if (isset($_POST['login_user'])) {
$id = mysqli_real_escape_string($db, $_POST['id']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
$phone = mysqli_real_escape_string($db, $_GET['phone']);
  
  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
  	$results = mysqli_query($db, $query);
  	
	if (mysqli_num_rows($results) == 1) {
	$row = mysqli_fetch_array($query);

	$_SESSION['id'] = $row['id'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['firstname'] = $row['firstname'];
	$_SESSION['lastname'] = $row['lastname'];
	$_SESSION['phone'] = $row['phone'];
	$_SESSION['gender'] = $row['gender'];
	$_SESSION['specialization'] = $row['specialization'];	
$_SESSION["favcolor"] = $email;


  	  header('location: profile.php');

  	}else {
  		array_push($errors, "Wrong username/password combination");
		
  	}
  }
}
mysqli_close($conn);
?>
</body>
</html>