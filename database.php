<?php
$servername = "applem.cidfrofigwko.us-east-1.rds.amazonaws.com";
$username = "applem";
$password = "abc12345678";
$database = "AppleMart";

// Create connection
$database = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$database) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

echo "Connected successfully!";
?>
