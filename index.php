<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: left;
        }


        button:hover {
            background-color: lightblue;
        }
    </style>
</head>
<body>

    <h2>Item</h2>
    <form id="ItemForm">
        Item name: <input type="text" id="itemname" required>
        Price: <input type="number" id="price" required>
        <input type="submit" value="Submit">
    </form>

    <br>

    <table id="ItemTable">
        <thead>
            <tr>
                <th>ItemID</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Hardcoded items -->
        </tbody>
    </table>

    <script>
        let idCounter = 1; // Counter for ID assignment
        const form = document.getElementById("ItemForm");
        const tableBody = document.querySelector("#ItemTable tbody");

        // Function to add a row
        function addRow(name, price) {
            const row = document.createElement("tr");

            row.innerHTML = `
                <td>${idCounter}</td>
                <td>${name}</td>
                <td>${price}</td>
                <td><button onclick="deleteRow(this)">Delete</button></td>
            `;

            tableBody.appendChild(row);
            idCounter++; // Increment ID
        }

        // Add hardcoded items
        addRow("Rice", "50.99");

        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent page reload
            
            const pcName = document.getElementById("itemname").value;
            const price = document.getElementById("price").value;

            if (pcName && price) {
                addRow(pcName, price);
                form.reset(); // Clear the form fields
            }
        });

        function deleteRow(button) {
            button.parentElement.parentElement.remove(); // Remove the row
        }
    </script>

</body>
</html>

