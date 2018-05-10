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


<?php

if(isset($_POST['update'])){
$servername = "localhost";
$dbusername = "root";
$dbpassword = "password";
$dbname = "registration";

// Create connection
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
	$sql = 
	"UPDATE users SET email='".$Email."', 
	firstname='".$Fname."', 
	lastname='".$Lname."' , 
	password='".$Pass."', 
	phone='".$phone."', 
	gender='".$gender."', 
	specialization='".$Spec."', 
	address='".$address."' 
	WHERE id='".$ID."'";
   
   if ($conn->query($sql) === TRUE) {
    echo "Record Updated successfully";
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
} 
?>
</HTML>