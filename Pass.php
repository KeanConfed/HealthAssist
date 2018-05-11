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

if(isset($_POST['submit'])){
$servername = "localhost";
$dbusername = "user";
$dbpassword = "user";
$dbname = "healthassist";

// Create connection
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


	$Fname = $_POST['fname'];
	$Lname = $_POST['lname'];
	$Email = $_POST['email'];
	$Email2 = $_POST['email2'];
	$Pass = $_POST['password'];
	$Pass2 = $_POST['password2'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$Spec = $_POST['Specialization'];

	$sql = "INSERT INTO doctortable (id, Email, First_Name, Last_Name,Picture, Password, Phone_Number, Gender, Special, address) VALUES (NULL,'".$Email."', '".$Fname."', '".$Lname."',NULL ,'".$Pass."', '".$phone."', '".$gender."', '".$Spec."', '".$address."')";
	if($Pass != $Pass2){
	$_SESSION['Error'] ="Passwords do not match";
	header("Location: Registration.php");
	exit();
	}else if($Email != $Email2){
	$_SESSION['Error'] ="Usernames/Emails do not match";
	header("Location: Registration.php");
	exit();
	}else if ($conn->query($sql) === TRUE) {
	$_SESSION['Error'] ="";
    echo "New record created successfully";
	header("Location: Login.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
} 
?>
</HTML>