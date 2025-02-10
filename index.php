<?php
include('database.php'); // Include database connection

// Fetch all items from the database
$sql = "SELECT * FROM Item";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item List</title>
</head>
<body>
    <h2>Item List</h2>
    <table border="1">
        <tr>
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['ItemID']; ?></td>
            <td><?php echo $row['ItemName']; ?></td>
            <td><?php echo $row['Price']; ?></td>
            <td>
                <a href="delete.php?ItemID=<?php echo $row['ItemID']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <h2>Add New Item</h2>
    <form action="insert.php" method="post">
        <label>Item ID:</label>
        <input type="text" name="ItemID" required><br>
        <label>Item Name:</label>
        <input type="text" name="ItemName" required><br>
        <label>Price:</label>
        <input type="number" step="0.01" name="Price" required><br>
        <input type="submit" value="Add Item">
    </form>
</body>
</html>
