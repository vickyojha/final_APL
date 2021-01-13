<?php
	
$servername = "mysql.hostinger.in";			// Hostname
$username = "u807730479_apl";					// Username
$password = "apl@12";						// Password
$dbname = "u807730479_apl";			// Database

// $servername = "localhost";			// Hostname
// $username = "root";					// Username
// $password = "";						// Password
// $dbname = "apl";	    // Database
// date_default_timezone_set('Asia/Kolkata');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

mysqli_set_charset($conn, 'utf8');

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

?>
