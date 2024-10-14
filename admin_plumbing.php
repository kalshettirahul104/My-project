<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./admin_servicies.css">
</head>
<body>
<div class="container">
        <h1> Plumbing bookings  </h1>
        <?php
        session_start();
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
        $sql = "SELECT * FROM crafhomedb.bookings,crafhomedb.service where s_name=reqest and s_id > 305 and s_id <405 ";
        $result = mysqli_query($conn, $sql);

        // Count the number of bookings
        $booking_count = mysqli_num_rows($result);

        // Display the number of bookings
        echo "<p>Number of bookings: $booking_count</p>";

        // Display the table of bookings
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Booking ID</th>";
        echo "<th>customer Email</th>";
        echo "<th>Service</th>";
        echo "<th>Booking date</th>";
        echo "<th>Preffered date</th>";
        echo "<th>Status</th>";
        echo "<th>Update Status</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["booking_id"] . "</td> <td>" . $row["email"] . "</td><td>" . $row["reqest"] . "</td><td>" . $row["booking_date"] . "</td><td>" . $row["pref_date"] . "</td><td>" . $row["status"] . "</td>";
            echo "<td>";
            echo "<form action='admin_plumber_update.php' method='post'>";
            echo "<input type='hidden' name='id' value='" . $row["booking_id"] . "'>";
            echo "<select name='status'>";
            echo "<option value='pending' " . ($row["status"] == "pending" ? "selected" : "") . ">Pending</option>";
            echo "<option value='confirmed' " . ($row["status"] == "confirmed" ? "selected" : "") . ">Confirmed</option>";
            echo "<option value='completed' " . ($row["status"] == "completed" ? "selected" : "") . ">Completed</option>";
            echo "</select>";
            echo "<input type='submit' name='update_status' value='Update'>";
            echo "</form>";
            if($row["status"] == "completed") {
                echo "<form action='generate_bill.php' method='post'>";
                echo "<input type='hidden' name='booking_id' value='" . $row["booking_id"] . "'>";
                echo "<input type='hidden' name='email' value='" . $row["email"] . "'>";
                echo "<input type='hidden' name='reqest' value='" . $row["reqest"] . "'>";
                echo "<input type='hidden' name='name' value='" . $row["name"] . "'>";
                echo "<input type='submit' name='generate_bill' value='Generate Bill'>";
                echo "</form>";

            }
            echo "</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";

        $conn->close();
        ?>
    </div>
</body>
</html>
