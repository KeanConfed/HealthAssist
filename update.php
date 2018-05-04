<?php
session_start();

// initializing variables
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "registration";


$firstname = "";
$lastname = "";

$email = "";
$address = "";
$phone = "";
$gender = "";
$specialization = "";

$errors = array();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());


$Email = $_POST['username'];
	$Pass = $_POST['password'];
	$sql = mysql_query("SELECT * FROM doctortable WHERE Email = '$Email' AND Password = '$Pass' LIMIT 1");
	if (mysql_num_rows($sql) == 1) {
		$row = mysql_fetch_array($sql);
		session_start();
		$_SESSION['email'] = $row['email'];
		$_SESSION['firstname'] = $row['firstname'];
		$_SESSION['lastname'] = $row['lastname'];
		$_SESSION['phone'] = $row['phone'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['specialization'] = $row['specialization'];
		header("Location:profile.html");
		exit();
	}else{ 
        header("Location: login.php"); 
        exit(); 
   } 

}

if (isset($_POST['update'])) {
// receive all input values from the form
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
$email_2 = mysqli_real_escape_string($conn, $_POST['email_2']);
  
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$specialization = mysqli_real_escape_string($conn, $_POST['specialization']);

  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

$id = $_SESSION['id'];




$user_check_query = "SELECT * FROM users WHERE email='$email'  LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
 
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "UPDATE users SET firstname = '$_POST[firstname]', lastname = '$_POST[lastname]' , email= '$_POST[email]', password = '$_POST[password]', phone = '$_POST[phone]', gender = '$_POST[gender]', specialization = '$_POST[specialization]'  WHERE email='$email'";

  	mysqli_query($conn, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }



	if (mysqli_query($conn, $query)) {
	    	echo "Record updated successfully";
		} else {
	    	echo "Error updating record: " . mysqli_error($conn);
		}
	}

mysqli_close($conn);
?>