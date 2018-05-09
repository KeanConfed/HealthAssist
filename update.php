<?php
session_start();
?>

<?php
// initializing variables
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


	$Fname = $_POST['firstname'];
	$Lname = $_POST['lastname'];
	$Email = $_POST['email'];
	$Pass = $_POST['password'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$Spec = $_POST['specialization'];
	$ID = $_SESSION['id'];

	$errors = array(); 



if (isset($_POST['update'])) {	
	$sql = 
	"UPDATE users SET email='".$Email."', 
	firstname='$Fname', 
	lastname='".$Lname."' , 
	password='".$Pass."', 
	phone='".$phone."', 
	gender='".$gender."', 
	specialization='".$Spec."', 
	address='".$address."' 
	WHERE id = '".$ID."'";


//
if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

if ($email_1 != $e_2) {
	array_push($errors, "The two passwords do not match");
  }

// first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
 

    if ($user['email'] === $Email) {
      array_push($errors, "email already exists");
    }

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
