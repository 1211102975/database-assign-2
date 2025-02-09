<html>
<head>
    <title>Basic MySQLi Commands</title>
</head>
<body>
    <div>
        <form method="POST" action="insert.php">
            <label>ItemName: </label><input type="text" name="itemname">
            <label>Price: </label><input type="text" name="price">
            <input type="submit" name="insert">
        </form>
    </div>
    <br>
    <div>
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                include('database.php');  
                
                $query = mysqli_query($database, "SELECT * FROM Item"); 
                
                while ($row = mysqli_fetch_assoc($query)) { 
                ?>
                    <tr>
                        <td><?php echo $row['ItemID']; ?></td>
                        <td><?php echo $row['ItemName']; ?></td>
                        <td><?php echo $row['Price']; ?></td>
                        <td>
                            <a href="delete.php?ItemID=<?php echo $row['ItemID']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
