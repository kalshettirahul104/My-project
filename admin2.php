<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        h1 {
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        form {
            display: inline-block;
        }
        select {
            padding: 5px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        <table>
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>customer Email</th>
                    <th>Service</th>
                    <th>Booking date </th>
                    <th> Preffered date</th>
                    <th>Status</th>
                    <th>Update Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- PHP logic to fetch and display bookings -->
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "1899";
                $dbname = "crafhomedb";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch bookings from the database
                $sql = "SELECT * FROM crafhomedb.bookings,crafhomedb.service where s_name=reqest and s_id < 105  ";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["booking_id"] . "</td> <td>" . $row["email"] . "</td><td>" . $row["reqest"] . "</td><td>" . $row["booking_date"] . "</td><td>" . $row["pref_date"] . "</td><td>" . $row["status"] . "</td>";
                    echo "<td>";
                    echo "<form action='update_status.php' method='post'>";
                    echo "<input type='hidden' name='id' value='" . $row["booking_id"] . "'>";
                    echo "<select name='status'>";
                    echo "<option value='pending' " . ($row["status"] == "pending" ? "selected" : "") . ">Pending</option>";
                    echo "<option value='confirmed' " . ($row["status"] == "confirmed" ? "selected" : "") . ">Confirmed</option>";
                    echo "<option value='completed' " . ($row["status"] == "completed" ? "selected" : "") . ">Completed</option>";
                    echo "</select>";
                    echo "<input type='submit' name='update_status' value='Update'>";
                    echo "</form>";
                    echo "</td></tr>";


                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h1>Admin Panel</h1>
        <table>
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>customer Email</th>
                    <th>Service</th>
                    <th>Booking date </th>
                    <th> Preffered date</th>
                    <th>Status</th>
                    <th>Update Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- PHP logic to fetch and display bookings -->
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "1899";
                $dbname = "crafhomedb";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch bookings from the database
                $sql = "SELECT * FROM crafhomedb.bookings,crafhomedb.service where s_name=reqest and s_id < 205 and s_id >105";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["booking_id"] . "</td> <td>" . $row["email"] . "</td><td>" . $row["reqest"] . "</td><td>" . $row["booking_date"] . "</td><td>" . $row["pref_date"] . "</td><td>" . $row["status"] . "</td>";
                    echo "<td>";
                    echo "<form action='update_status.php' method='post'>";
                    echo "<input type='hidden' name='id' value='" . $row["booking_id"] . "'>";
                    echo "<select name='status'>";
                    echo "<option value='pending' " . ($row["status"] == "pending" ? "selected" : "") . ">Pending</option>";
                    echo "<option value='confirmed' " . ($row["status"] == "confirmed" ? "selected" : "") . ">Confirmed</option>";
                    echo "<option value='completed' " . ($row["status"] == "completed" ? "selected" : "") . ">Completed</option>";
                    echo "</select>";
                    echo "<input type='submit' name='update_status' value='Update'>";
                    echo "</form>";
                    echo "</td></tr>";


                }
                 $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
