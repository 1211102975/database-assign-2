<?php
    $ItemID = $_GET['ItemID'];
    include('database.php');
    mysqli_query($database,"DELETE FROM Item WHERE ItemID='$ItemID'");
    header('Location: index.php');
?>
