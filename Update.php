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
	$ID = $_SESSION['ID'];
	$sql = 
	"UPDATE doctortable SET Email='".$Email."', 
	First_Name='".$Fname."', 
	Last_Name='".$Lname."' , 
	Password='".$Pass."', 
	Phone_Number='".$phone."', 
	Gender='".$gender."', 
	Special='".$Spec."', 
	address='".$address."' 
	WHERE id='".$ID."'";
   if($Pass != $Pass2){
	$_SESSION['Error'] ="Passwords do not match";
	header("Location: Profile.php");
	exit();
	}else if($Email != $Email2){
	$_SESSION['Error'] ="Usernames/Emails do not match";
	header("Location: Profile.php");
	exit();
	}else if ($conn->query($sql) === TRUE) {
    echo "Record Updated successfully";
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
} 
?>
</HTML>