<?php

// Create connection
$database = mysqli_connect("applem.cidfrofigwko.us-east-1.rds.amazonaws.com","applem","abc12345678","AppleMart");

// Check connection
if (mysqli_connect_errorno()) {
    echo"Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
