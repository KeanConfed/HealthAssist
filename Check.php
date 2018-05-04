<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<HTML>

<!--
CP340 - Experiential Learning Project
Thunder Bay IT : (Emmett Parker & Stephen Kean)
HealthAssist Web-Application 
May 2nd, 2018
-->

<!--Login check php file -->
<?php

if(isset($_POST['submit'])){
$servername = "localhost";
$dbusername = "user";
$dbpassword = "user";
$dbname = "healthassist";

// Create connection
$conn = mysql_connect($servername, $dbusername, $dbpassword) or die("Error connecting to databas");
mysql_select_db($dbname,$conn) or die("Simply can't select database");


	$Email = $_POST['username'];
	$Pass = $_POST['password'];
	$sql = mysql_query("SELECT * FROM doctortable WHERE Email = '$Email' AND Password = '$Pass' LIMIT 1");
	if (mysql_num_rows($sql) == 1) {
		$row = mysql_fetch_array($sql);
		$_SESSION['ID'] = $row['id'];
		$_SESSION['username'] = $row['Email'];
		$_SESSION['FirstName'] = $row['First_Name'];
		$_SESSION['LastName'] = $row['Last_Name'];
		$_SESSION['Pic'] = $row['Picture'];
		$_SESSION['Phone'] = $row['Phone_Number'];
		$_SESSION['Gender'] = $row['Gender'];
		$_SESSION['Special'] = $row['Special'];
		header("Location:Profile.php");
		exit();
	}else{ 
        header("Location: Login.php"); 
        exit(); 
    } 
} 
?>

</HTML>