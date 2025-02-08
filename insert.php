<?php
include('database.php'); // Include database connection

$ItemName = $_POST['ItemName'];
$Price = $_POST['Price'];

// Insert data (ItemID is auto-generated)
$sql = "INSERT INTO Item (ItemName, Price) 
        VALUES ('$ItemName','$Price')";

if (mysqli_query($database, $sql)) {
    header('Location: index.php'); // Redirect back to the main page
} else {
    echo "Error: " . mysqli_error($databse);
}
?>
