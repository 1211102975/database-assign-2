<?php
$ItemID = $_GET['ItemID'];
include('database.php');

$sql = "DELETE FROM Item WHERE ItemID='$ItemID'";

if (mysqli_query($database, $sql)) {
    header('Location: index.php');
} else {
    echo "Error: " . mysqli_error($database);
}
?>
