<?php
$servername = "localhost";
$username = "root";
$password = "";
$dname="touristguide";
$conn=new mysqli($servername, $username, $password,$dname);
if ($conn->connect_error)
 {
	die("Connection failed: " . $conn->connect_error);
	 }
?>
