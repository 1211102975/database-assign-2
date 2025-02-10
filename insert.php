<?php
    include('database.php');
    $ItemName = $_POST['ItemName'];
    $Price = $_POST['Price'];

// Insert data (ItemID is auto-generated)
    mysqli_query($database,"INSERT INTO Item (ItemName, Price) 
            VALUES ('$ItemName','$Price')");
    header('Location: index.php'); // Redirect back to the main page

?>
